<?php 

class Picture
{
    private $pictureId;
    private $articleId;
    private $picture;
    private $description;
    
    
    function __construct($articleId, $picture, $description){
        
        $this->articleId = $articleId;
        $this->picture = $picture;
        $this->description = $description;        
    }
    
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
    
    private $articleId;
    private $picture;
    private $description;
    
    
    public function register($connectionId, $articleId)
    {
        
        try
        {
            $stmt = $connectionId->prepare("INSERT INTO pictures(articleid,picture,description)
              VALUES(:articleid, :picture, :description)");
            
            $stmt->bindparam(":name", $articleId);
            $stmt->bindparam(":picture", $this->picture);
            $stmt->bindparam(":description", $this->description);
   
            $stmt->execute();
            
            return $stmt;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    
    
    
}

?>