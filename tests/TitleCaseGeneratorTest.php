<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

            function test_makeTitleCase_oneWord()
            {
                // Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "i";

                //act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                //Assert
                $this->assertEquals("I", $result);
            }
    }

?>
