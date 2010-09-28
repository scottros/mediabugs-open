<?

	$POD->registerPOD('bugs_profiles','Give each member a personal profile',array('^people/(.*)'=>'bugs_profiles/profile.php?username=$1','^editprofile'=>'bugs_profiles/editprofile.php'),array('profilePath'=>'/people'));

?>