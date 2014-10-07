<?php

// src/Sbtmapp/sbtmBundle/Entity/Session.php

namespace Sbtmapp\SbtmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Session")
 */
class Session {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $session_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $charter;

    /**
     * @ORM\Column(type="text")
     */
    protected $areas;

    /**
     * @ORM\Column(type="text")
     */
    protected $test_notes;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $ready;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $tester;

     /**
     * @ORM\OneToOne(targetEntity="Status")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status_id;

    /**
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="session_id")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    protected $project_id;

      /**
     * @ORM\OneToOne(targetEntity="Strategy")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    protected $strategy_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;


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
     * Set session_name
     *
     * @param string $sessionName
     * @return Session
     */
    public function setSessionName($sessionName)
    {
        $this->session_name = $sessionName;

        return $this;
    }

    /**
     * Get session_name
     *
     * @return string 
     */
    public function getSessionName()
    {
        return $this->session_name;
    }

    /**
     * Set charter
     *
     * @param string $charter
     * @return Session
     */
    public function setCharter($charter)
    {
        $this->charter = $charter;

        return $this;
    }

    /**
     * Get charter
     *
     * @return string 
     */
    public function getCharter()
    {
        return $this->charter;
    }

    /**
     * Set areas
     *
     * @param string $areas
     * @return Session
     */
    public function setAreas($areas)
    {
        $this->areas = $areas;

        return $this;
    }

    /**
     * Get areas
     *
     * @return string 
     */
    public function getAreas()
    {
        return $this->areas;
    }

    /**
     * Set test_notes
     *
     * @param string $testNotes
     * @return Session
     */
    public function setTestNotes($testNotes)
    {
        $this->test_notes = $testNotes;

        return $this;
    }

    /**
     * Get test_notes
     *
     * @return string 
     */
    public function getTestNotes()
    {
        return $this->test_notes;
    }

    /**
     * Set ready
     *
     * @param boolean $ready
     * @return Session
     */
    public function setReady($ready)
    {
        $this->ready = $ready;

        return $this;
    }

    /**
     * Get ready
     *
     * @return boolean 
     */
    public function getReady()
    {
        return $this->ready;
    }

    /**
     * Set tester
     *
     * @param string $tester
     * @return Session
     */
    public function setTester($tester)
    {
        $this->tester = $tester;

        return $this;
    }

    /**
     * Get tester
     *
     * @return string 
     */
    public function getTester()
    {
        return $this->tester;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Session
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
     * @return Session
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
     * Set status_id
     *
     * @param \Sbtmapp\SbtmBundle\Entity\Status $statusId
     * @return Session
     */
    public function setStatusId(\Sbtmapp\SbtmBundle\Entity\Status $statusId = null)
    {
        $this->status_id = $statusId;

        return $this;
    }

    /**
     * Get status_id
     *
     * @return \Sbtmapp\SbtmBundle\Entity\Status 
     */
    public function getStatusId()
    {
        return $this->status_id;
    }

    /**
     * Set project_id
     *
     * @param \Sbtmapp\SbtmBundle\Entity\Project $projectId
     * @return Session
     */
    public function setProjectId(\Sbtmapp\SbtmBundle\Entity\Project $projectId = null)
    {
        $this->project_id = $projectId;

        return $this;
    }

    /**
     * Get project_id
     *
     * @return \Sbtmapp\SbtmBundle\Entity\Project 
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Set strategy_id
     *
     * @param \Sbtmapp\SbtmBundle\Entity\Strategy $strategyId
     * @return Session
     */
    public function setStrategyId(\Sbtmapp\SbtmBundle\Entity\Strategy $strategyId = null)
    {
        $this->strategy_id = $strategyId;

        return $this;
    }

    /**
     * Get strategy_id
     *
     * @return \Sbtmapp\SbtmBundle\Entity\Strategy 
     */
    public function getStrategyId()
    {
        return $this->strategy_id;
    }
}
