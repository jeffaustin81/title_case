<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

            function test_makeTitleCase_oneLetter()
            {
                // Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "i";

                //act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                //Assert
                $this->assertEquals("I", $result);
            }

            function test_makeTitleCase_oneWord()
            {
                //Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "beowulf";

                //Act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                //Assert
                $this->assertEquals("Beowulf", $result);
            }

            function test_makeTitleCase_multipleWords()
            {
                // Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "beowulf begins";

                // Act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                // Assert
                $this->assertEquals("Beowulf Begins", $result);
            }

            function test_makeTitleCase_conjunctionIgnore()
            {
                // Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "beowulf from brighton beach";

                // Act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                // Assert
                $this->assertEquals("Beowulf from Brighton Beach", $result);
            }

    }

?>
