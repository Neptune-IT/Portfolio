<?php

class Projects {
    
    /** @var Projects[] $projects_list */
    public static $projects_list = [];
    
    /** @var string $project_name */
    private $project_name = "";
    
    /** @var string $description */
    private $description = "";

    /** @var string $link */
    private $link = "";

    /** @var string $statement */
    private $statement = "";
    
    public function __construct(string $name, string $description, string $link, string $state){
        $this->project_name = $name;
        $this->description = $description;
        $this->statement = $state;
        $this->link = $link;
        array_push(self::$projects_list, $this);
    }
    
    /**
     * @return string
     */
    public function get_name() : string { return $this->project_name; }
    
    /**
     * @return string
     */
    public function get_description() : string { return $this->description; }

    /**
     * @return string
     */
    public function get_statement() : string { return $this->statement; }

    /**
     * @return string
     */
    public function get_link() : string { return $this->link; }
}