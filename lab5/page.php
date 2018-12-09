<?php
/**
* 
*/
class page {
	private $page;
	private $title;
	private $year;
	private $copyright;
	function __construct($title, $year, $copyright ){
		$this->title = $title;
		$this->year = $year;
		$this->copyright = $copyright;
	}

	private function addHeader(){
		$this->page = $this->title;
	}

	public function addContent($content){
        $this->addHeader();
        $this->page .= "<p>$content</p>";
        $this->addFooter();
    }

    private function addFooter(){
		$this->page.="<br>".$this->year." ".$this->copyright;
	}

	public function get(){
		return $this->page;
	}
}
	$page = new Page("title",2018,"Copyright DTH");
	$page->addContent('content');
	echo $page->get();

?>