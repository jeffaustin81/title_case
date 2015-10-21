<?php
class TitleCaseGenerator
{
    function makeTitleCase($input_title)
    {

        //Preposition and conjunction array
        $prep_con = array("a","an","and","as","at","but","by",
        "en","for","if","in","of","on","or","the","to", "from");

        //prefixes to check for
        $prefix = array("mc", "o'");
        //Seperates string by space and stores into an array
        $input_array_of_words = explode(" ", strtolower($input_title));

        //Grab first index
        $first_word = ucfirst(array_shift($input_array_of_words));

        //Storage array
        $output_titlecased = array();

        //Caps the first letter of all words
        foreach($input_array_of_words as $word) {


            //Checks to see if the input is a conjuction or prep
            /// if it is then we make sure to not capitalize it.
            if(in_array($word, $prep_con)){

                array_push($output_titlecased, $word);


            //Prefix fix
            }elseif(in_array(substr($word, 0, 2), $prefix)){


                $storage = str_split($word);
                $storage[2] = strtoupper($storage[2]);
                $storage = implode("", $storage);

                array_push($output_titlecased, ucfirst($storage));


            }else{

                array_push($output_titlecased, ucfirst($word));

            }

        }

        //Add first word back to array
        array_unshift($output_titlecased, $first_word);

        return implode(" ", $output_titlecased);


    }

}

?>

