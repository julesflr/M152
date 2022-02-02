<?php
class media{
    private $idMedia;
    private $nomMedia;
    private $creationDate;
    private $modificationData;
    private $idPost;

    /**
     * Get the value of idMedia
     */ 
    public function getIdMedia()
    {
        return $this->idMedia;
    }

    /**
     * Set the value of idMedia
     *
     * @return  self
     */ 
    public function setIdMedia($idMedia)
    {
        $this->idMedia = $idMedia;

        return $this;
    }

    /**
     * Get the value of nomMedia
     */ 
    public function getNomMedia()
    {
        return $this->nomMedia;
    }

    /**
     * Set the value of nomMedia
     *
     * @return  self
     */ 
    public function setNomMedia($nomMedia)
    {
        $this->nomMedia = $nomMedia;

        return $this;
    }

    /**
     * Get the value of creationDate
     */ 
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set the value of creationDate
     *
     * @return  self
     */ 
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get the value of modificationData
     */ 
    public function getModificationData()
    {
        return $this->modificationData;
    }

    /**
     * Set the value of modificationData
     *
     * @return  self
     */ 
    public function setModificationData($modificationData)
    {
        $this->modificationData = $modificationData;

        return $this;
    }

    /**
     * Get the value of idPost
     */ 
    public function getIdPost()
    {
        return $this->idPost;
    }

    /**
     * Set the value of idPost
     *
     * @return  self
     */ 
    public function setIdPost($idPost)
    {
        $this->idPost = $idPost;

        return $this;
    }



    
}
?>