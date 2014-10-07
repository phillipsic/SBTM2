<?php

// src/Sbtmapp/sbtmBundle/Entity/Project.php

namespace Sbtmapp\SbtmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="project")
 */
class Project {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $project_name;

    /**
     * @ORM\Column(type="date")
     */
    protected $project_start_date;

    /**
     * @ORM\Column(type="date")
     */
    protected $project_end_date;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $project_completed;

    /**
     * @ORM\OneToMany(targetEntity="Session", mappedBy="id")
     */
    protected $session_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->session_id = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set project_name
     *
     * @param string $projectName
     * @return Project
     */
    public function setProjectName($projectName)
    {
        $this->project_name = $projectName;

        return $this;
    }

    /**
     * Get project_name
     *
     * @return string 
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * Set project_start_date
     *
     * @param \DateTime $projectStartDate
     * @return Project
     */
    public function setProjectStartDate($projectStartDate)
    {
        $this->project_start_date = $projectStartDate;

        return $this;
    }

    /**
     * Get project_start_date
     *
     * @return \DateTime 
     */
    public function getProjectStartDate()
    {
        return $this->project_start_date;
    }

    /**
     * Set project_end_date
     *
     * @param \DateTime $projectEndDate
     * @return Project
     */
    public function setProjectEndDate($projectEndDate)
    {
        $this->project_end_date = $projectEndDate;

        return $this;
    }

    /**
     * Get project_end_date
     *
     * @return \DateTime 
     */
    public function getProjectEndDate()
    {
        return $this->project_end_date;
    }

    /**
     * Set project_completed
     *
     * @param boolean $projectCompleted
     * @return Project
     */
    public function setProjectCompleted($projectCompleted)
    {
        $this->project_completed = $projectCompleted;

        return $this;
    }

    /**
     * Get project_completed
     *
     * @return boolean 
     */
    public function getProjectCompleted()
    {
        return $this->project_completed;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Project
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Project
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Add session_id
     *
     * @param \Sbtmapp\SbtmBundle\Entity\Session $sessionId
     * @return Project
     */
    public function addSessionId(\Sbtmapp\SbtmBundle\Entity\Session $sessionId)
    {
        $this->session_id[] = $sessionId;

        return $this;
    }

    /**
     * Remove session_id
     *
     * @param \Sbtmapp\SbtmBundle\Entity\Session $sessionId
     */
    public function removeSessionId(\Sbtmapp\SbtmBundle\Entity\Session $sessionId)
    {
        $this->session_id->removeElement($sessionId);
    }

    /**
     * Get session_id
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSessionId()
    {
        return $this->session_id;
    }
}
