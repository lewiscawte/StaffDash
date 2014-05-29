<?php
class BugzillaLogin extends Login {
	function setupUI {
		$sdLoginDetails['Bugzilla'] = array(
			'name'		=> 'Bugzilla',
			'icon-small'	=> "$pluginPath/images/icon-16px.png";
			'icon-large'	=> "$pluginPath/images/icon-256px.png";
		);
	}
	private function buildLoginForm {
		require_once( "$pluginPath/ui/LoginForm.php" );
	}
}
