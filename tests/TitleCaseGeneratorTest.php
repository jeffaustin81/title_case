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

            function test_makeTitleCase_firstWord()
            {
                // Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "from brighton beach";

                // Act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                // Assert
                $this->assertEquals("From Brighton Beach", $result);
            }

            function test_makeTitleCase_nonLetter()
            {
                // Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "57 from home";

                // Act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                // Assert
                $this->assertEquals("57 from Home", $result);
            }

            function test_makeTitleCase_toLowerCase()
            {
                // Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "OH YEAH!!";

                // Act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                // Assert
                $this->assertEquals("Oh Yeah!!", $result);
            }

            function test_makeTitleCase_ignoreMixedCase()
            {
                // Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "oH yEAh!!";

                // Act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                // Assert
                $this->assertEquals("Oh Yeah!!", $result);
            }

            function test_makeTitleCase_ignorePrefix()
            {
                // Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "here's to beowulf and McDuff and O'Malley.";

                // Act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                // Assert
                $this->assertEquals("Here's to Beowulf and McDuff and O'Malley.", $result);
            }



    }

?>
