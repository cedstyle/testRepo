Feature: test
  In order to see the directory structure
  As a UNIX user
  I need to be able to list the current directory's content

Scenario: Test 2 parameters
    Given first parameter 'one'
    And second parameter 'two'
    When I run "test"
    Then I should get:one+two