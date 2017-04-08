<?php

	$page=isset($_GET['page'])?$_GET['page']:'genInfo';
	switch($page){
		case 'mission':
			 $view="main/generalInfo/mission.php";
			 $pageHeader = "Mission and Vision";
		break;

		case 'guide':
			 $view="main/generalInfo/guide.php";
			 $pageHeader = "Guidelines";
		break;

		case 'bestP':
			 $view="main/generalInfo/bestP.php";
			 $pageHeader = "Best Practices";
		break;

		case 'lBoard':
			 $view="main/generalInfo/lBoard.php";
			 $pageHeader = "Leadership Board";
		break;

		case 'accInfo':
			$view="main/account/accountInfo.php";
			$pageHeader = "Account Information";
		break;
		case 'compMess':
			$view ="main/communication/compMess.php";
			$pageHeader="Send Message";
		break;
		case 'inbox':
			$view ="main/communication/inbox.php";
			$pageHeader="Inbox";
		break;
		case 'overview':
			$view='main/project/overview.php';
			$pageHeader = "Project Description";
		break;
		case 'tasks':
			$view="main/project/task.php";
			$pageHeader = "Project Tasks";
		break;
		case 'resources':
			$view="main/project/resources.php";
			$pageHeader = "Project Resources";
		break;

		//newly created
		case 'clientProject':
			$view="main/project/clientProj.php";
			$pageHeader = "Create Client Project";
		break;
		case 'internalProject':
			$view="main/project/intProj.php";
			$pageHeader = "Create Internal Project";
		break;
		case 'projOverview':
			$view='main/project/overview.php';
			$pageHeader = "Project Description";
		break;
		case 'projModification':
			$view="main/project/projMod.php";
			$pageHeader = "Project Members";
		break;
		case 'projCompletion':
			$view="main/project/projComp.php";
			$pageHeader = "Project Completion";
		break;
		case 'viewProposal':
			$view="main/project/viewProp.php";
			$pageHeader = "View Project Proposals";
		break;
		case 'projHistory':
			$view="main/project/projHist.php";
			$pageHeader = "View Project History";
		break;
		case 'addMember':
			$view="main/project/addMemb.php";
			$pageHeader = "Add New Member";
		break;

	}
?>
