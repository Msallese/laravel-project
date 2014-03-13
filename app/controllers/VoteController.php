<?php
class VoteController extends BaseController 
{

//Occurs when a user makes a selection
    public function saveVote($personSelected)
    {
    	return true;
    }

//Queries the database for the top 5 results today and shows the updated results page
    public function getTop5Today()
    {
    	//Returns the updated results page
    	return View::make('results');
    }

    //Queries the database for the top 5 results this week and shows the updated results page
    public function getTop5Week()
    {
    	//Returns the updated results page
    	return View::make('results');
    }

    //Queries the database for the top 5 results all time and shows the updated results page
    public function getTop5AllTime()
    {
    	//Returns the updated results page
    	return View::make('results');
    }


}
?>