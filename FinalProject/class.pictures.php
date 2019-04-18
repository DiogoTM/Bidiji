<?php 

class Picture
{
    private $pictureId;
    private $articleId;
    private $picture;
    private $description;
    /**
     * @return mixed
     */
    public function getPictureId()
    {
        return $this->pictureId;
    }

    /**
     * @return mixed
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $pictureId
     */
    public function setPictureId($pictureId)
    {
        $this->pictureId = $pictureId;
    }

    /**
     * @param mixed $articleId
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function uploadPicture($picture)
    {
        $fileType=$_FILES["file"]["type"];
        $fileSize=$_FILES["file"]["size"];
        $fileName=$_FILES["file"]["name"];
        $fileErr=$_FILES["file"]["error"];
        $fileTmp=$_FILES["file"]["tmp_name"];
        
        if ($fileErr==0){
            move_uploaded_file($fileTmp, "image/"+ $this->articleId + date("H:i:s"));
            echo "The picture was uploaded successfully! <br/>";
        }
    }
    
    
    
    
}

?>