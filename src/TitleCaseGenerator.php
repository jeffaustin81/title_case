<?php
class TitleCaseGenerator
{
    function makeTitleCase($input_title)
    {
        //Preposition and conjunction array
        $prep_con = array("a","an","and","as","at","but","by",
        "en","for","if","in","of","on","or","the","to", "from");

        //Seperates string by space and stores into an array
        $input_array_of_words = explode(" ", $input_title);

        //Storage array
        $output_titlecased = array();

        //Caps the first letter of all words
        foreach($input_array_of_words as $word) {


            //Checks to see if the input is a conjuction or prep
            /// if it is then we make sure to not capitalize it.
            if(in_array($word, $prep_con)){

                array_push($output_titlecased, $word);

            }else{

                array_push($output_titlecased, ucfirst($word));
                
            }

        }



        return implode(" ", $output_titlecased);


    }

}

?>
