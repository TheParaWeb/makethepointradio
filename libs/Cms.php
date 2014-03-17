<?php

class Cms
{

    public function __construct()
    {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }
    public function getRawContent($pageTitle){
        $result = $this->db->select('SELECT * FROM cms_content WHERE pageTitle = :pageTitle',
            array(':pageTitle'=>$pageTitle));
        $i=0;
        foreach ($result AS $entity){
            switch($entity['type']){
                case 'text':
                    break;
                case 'html':
                    $result[$i]['content'] = stripslashes($entity['content']);
                    break;
                case 'internalURL':
                    $result[$i]['content'] = URL.$entity['content'];
                    break;
                case 'data':
                    $result[$i]['content'] = unserialize($entity['content']);
                    break;
                default:
                    error_log('Cms::getContent() caused a default condition.');
            }
            $result[$i]['editTitle'] = stripslashes($entity['editTitle']);
            $result[$i]['editDesc'] = stripslashes($entity['editDesc']);
            $i++;
        }
        return $result;
    }

    public function getContent($pageTitle){
        $content = array();
        // Get raw content from the DB.
        // Loop through content and prep for rendering.
        foreach ($this->getRawContent($pageTitle) AS $entity){
            $content[$entity['arrayIndex']] = $entity['content'];
        }
        return $content;
    }

    public function updateContent($id,$content,$type='text'){

        $response = new stdClass();
        if($type=='data'){$content = serialize($content);}
        $sth = $this->db->prepare("UPDATE cms_content SET content = :content WHERE id=:id");

        if($sth->execute(array(':content'=>$content,':id'=>$id))){
            $response->status = "success";
            $response->message = "Database updated successfully!";
            return $response;
        }else{
            $response->status = "error";
            $response->message = "There was an error updating the database";
            return $response;
        }
    }

    public function generatePageMenu(){

        // Create Categories
        $results = $this->db->select(
            "SELECT * FROM cms_pages WHERE parent = '' ORDER BY pageName",
            array()
        );

        foreach ($results AS $row){

            $pages = $this->db->select(
                "SELECT * FROM cms_pages WHERE parent = :category",
                array(
                    ':category'=>$row['pageName']
                )
            );
            echo $row['pageName']." :".count($pages)."<br>";


        }

        echo "<hr/>";


        var_dump($results);die;
    }

    public function getUploadedImages($directory){
        // create an array to hold directory list
        $results = array();

        // create a handler for the directory
        $handler = opendir($directory);

        // open directory and walk through the filenames
        while ($file = readdir($handler)) {

            // if file isn't this directory or its parent, add it to the results
            if ($file != "." && $file != ".." && $file != "cropped") {
                $results[] = $file;
            }

        }
        // tidy up: close the handler
        closedir($handler);

        // done!
        return $results;

    }

    public function cropImage($data){

        $dir = "public/uploads/images/cropped/";
        $img = str_replace(URL,'',$_POST['img']);
        $array = explode('/',$img);
        $imgName = $dir.$data['finalWidth']."x".$data['finalHeight']."_".$data['arrayIndex']."_".$array[count($array)-1];;

        $picture = new Imagick($img);
        $picture->cropImage( $data['cropWidth'], $data['cropHeight'], $data['x'],$data['y']);
        $picture->resizeImage($data['finalWidth'],$data['finalHeight'], imagick::FILTER_LANCZOS, 0.9, true);
        if($picture->writeImage($imgName)){
            echo json_encode(array(
                'status'=>'good',
                'image'=>URL.$imgName
            ));
        }else{
            echo json_encode(array(
                'status'=>'fail',
                'message'=>'There was an error processing the image.'
            ));
        }
    }
}
