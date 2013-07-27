<?php
/*
 ******************************************************************************************

 Package            : MongoPagination  [ Pagination Class for MongoDB ]
 Version            : 0.4

 Lead Architect     : Sougata Pal. [ skall.paul@gmail.com ]
 Year               : 2011 - 2012

 Site               : http://www.techunits.com
 Contact / Support  : techmvc@googlegroups.com

 Copyright (C) 2009 - 2012 by TECHUNITS

 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:

 The above copyright notice and this permission notice shall be included in
 all copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 THE SOFTWARE.

 ******************************************************************************************
 */

/**
 * MongoPagination Class to Paginate MongoOutput Quickly in paramterized way
 * @author skall
 */
class MongoPagination {

  public function __construct($mongoHandler, $currentURL = false) {
    global $var;

    $this->mongoHandler = $mongoHandler;
    $this->currentURL   = $currentURL;
  }

  public function setQuery($queryParam, $currentpage = 1, $itemsPerPage = false) {
    global $var;

    $this->query = $queryParam;
    if(!empty($currentpage) && is_numeric($currentpage) && empty($itemsPerPage)) {
      $this->limitResult = $currentpage;
    }
    else {
      $this->currentpage = $currentpage;
      $this->itemsPerPage = $itemsPerPage;
    }
    return true;
  }

  /**
   * 	Paginate MongoResults
   */
  public function Paginate() {
    global $var;

    $collection = (!empty($this->query['#collection']))?$this->query['#collection']:die('MongoPagination: no collection found');
	if($_SESSION['find']!=''){
		$find=$_SESSION['find'];
//echo "s";
	}else{
		    $find = (!empty($this->query['#find']))?$this->query['#find']:array();
				$_SESSION['find']= $find;

//echo "ns";
	}
	//print_r($_SESSION);
   // $find = (!empty($this->query['#find']))?$this->query['#find']:array();
   $sortflag="0";

if($_REQUEST['sort']=='1'){
$sort=array(
  $_REQUEST['sortby']	=>  1
  );
$sortflag="1";
}else if($_REQUEST['sort']=='0'){
	$sort=array(
  $_REQUEST['sortby']	=> -1
  );
	$sortflag="1";

}else{
$sort = (!empty($this->query['#sort']))?$this->query['#sort']:array();
}//print_r($find);
    //  Get total results count
    echo "<div style='float:left;border:1;padding:5px;'><b>Total records:</b>".$this->totalItemCount = $this->mongoHandler->$collection->find($find)->count()."</div><div style='clear:both'>&nbsp;</div>";

    /*	Enable Limit based Query	*/
    if(!empty($this->limitResult)) {
      $resultSet = $this->mongoHandler->$collection->find($find)
      ->sort($sort)
      ->limit($this->limitResult);
      return array(
        'dataset'		=>    iterator_to_array($resultSet),
        'totalItems'	=>    $this->totalItemCount
      );
    }
    /*	Enable Pagination based Query	*/
    else {
      $resultSet = $this->mongoHandler->$collection->find($find)
      ->sort($sort)
      ->limit($this->itemsPerPage)
      ->skip($this->itemsPerPage * ($this->currentpage-1));
      $this->totalPages = floor($this->totalItemCount / $this->itemsPerPage);
      return array(
        'dataset'		=>    iterator_to_array($resultSet),
        'totalPages'	=>    $this->totalPages,
        'totalItems'	=>    $this->totalItemCount
      );
    }
  }

  public function csv() {
    global $var;

    $collection = (!empty($this->query['#collection']))?$this->query['#collection']:die('MongoPagination: no collection found');
	if($_SESSION['find']!=''){
		$find=$_SESSION['find'];

	}else{
		    $find = (!empty($this->query['#find']))?$this->query['#find']:array();
				$_SESSION['find']= $find;


	}
   // $find = (!empty($this->query['#find']))?$this->query['#find']:array();
    $sort = (!empty($this->query['#sort']))?$this->query['#sort']:array();
//print_r($find);
    //  Get total results count
    //echo $this->totalItemCount = $this->mongoHandler->$collection->find($find)->count();

    /*	Enable Limit based Query	*/
    if(!empty($this->limitResult)) {
      $resultSet = $this->mongoHandler->$collection->find($find)
      ->sort($sort);
      //->limit($this->limitResult);
      return array(
        'dataset'		=>    iterator_to_array($resultSet),
        'totalItems'	=>    $this->totalItemCount
      );
    }
    /*	Enable Pagination based Query	*/
    else {
      $resultSet = $this->mongoHandler->$collection->find($find)
      ->sort($sort)
      ->skip($this->itemsPerPage * ($this->currentpage-1));
      $this->totalPages = floor($this->totalItemCount / $this->itemsPerPage);
      return array(
        'dataset'		=>    iterator_to_array($resultSet),
        'totalPages'	=>    $this->totalPages,
        'totalItems'	=>    $this->totalItemCount
      );
    }
  }


  /**
   * 	Generate HTML Based Page Links
   */

  public function getPageLinks($setVisiblePagelinkCount = 10, $type = 'HTML') {
	
    global $var;
   $sortflag="0";

if($_REQUEST['sort']=='1' || $_REQUEST['sort']=='0'){

$sortflag="1";
}



$sparams="";
if($sortflag=='1'){
	$sparams='&sort='. $_REQUEST['sort'].'&sortby='. $_REQUEST['sortby'];
	
}

    $html = '';
    //if($this->totalPages <= 1) {
     // return $html;
   // }

    $html = '<div class="MongoPagination">';
    if(1 != $this->currentpage) {
      $html .= '<span><a href="'.$this->preparePageLink($this->currentpage - 1).$sparams.'">previous</a></span>';
    }
    $VisiblePagelinkCount = 1;
    for($i=$this->currentpage; $i <= $this->totalPages; $i++) {
      if($VisiblePagelinkCount <= $setVisiblePagelinkCount) {
        if($this->currentpage == $i) {
          $html .= '<span><a class="active" href="'.$this->preparePageLink($i).$sparams.'">'.$i.'</a></span>';
        }
        else {
          $html .= '<span><a href="'.$this->preparePageLink($i).$sparams.'">'.$i.'</a></span>';
        }
      }
      $VisiblePagelinkCount++;
    }    
    if($this->totalPages != $this->currentpage) {
      $html .= '<span><a href="'.$this->preparePageLink($this->currentpage + 1).$sparams.'">next &raquo;</a></span>';
    }
    $html .= '</div>';
    
  
    $html = '<div class="MongoPagination">';
	
	$html .='<ul id="pagination-flickr"><li><span><a href="widget.php?page=1&action=3&paginate=1'.$sparams.'"><b>First</b></a></span></li>';
	//<li class="active">1</li>
	
    $VisiblePagelinkCount = 1;
    for($i=1; $i <= $this->totalPages; $i++) {
      if($VisiblePagelinkCount <= $setVisiblePagelinkCount) {
		  if(($_REQUEST['page']+$i)<=$this->totalPages){
			$pid=($_REQUEST['page']+$i);
			$html .= '<li '.$class.'><a href="widget.php?page='.($pid).'&action=3&paginate=1'.$sparams.'">'.($pid).'</a></li>';

		  }
      }
      $VisiblePagelinkCount++;
    }

    $html .= '<li><a href="widget.php?page='.$i.'&action=3&paginate=1'.$sparams.'"><b>Last</b></a> </li>';
    $html .= '</ul></div><div style="clear:both">&nbsp;</div>';

    
    return $html;
  }
  
  private function preparePageLink($currentPageIndex = 1) {
    global $var;
    $pageUrl = $this->currentURL;
    if(false === stristr($this->currentURL, '{{PAGE}}')) {
      $pageUrl = $this->currentURL.'/'.$i;
    }
    else {
      $pageUrl = str_ireplace('{{PAGE}}', $currentPageIndex, $this->currentURL);
    }
    
    return $pageUrl;
  }
}
