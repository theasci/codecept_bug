<?

$I = new AcceptanceTester($scenario);
$I->executeInSelenium(function ($wd) {
	$wd->get('file://' . realpath(__DIR__ . '/../../test_page.html'));
});
$I->selectOption('input[name=first_test_radio]', 'Yes');
$I->wait(2);
$I->selectOption('input[name=second_test_radio]', 'No');

$I->seeOptionIsSelected('input[name=first_test_radio]', 'Yes');
$I->seeOptionIsSelected('input[name=second_test_radio]', 'No');
