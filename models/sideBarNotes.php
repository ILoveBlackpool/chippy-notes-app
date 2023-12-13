<?php
// php function file that grabs card info from table and makes records in the sidebar that link to them in some way unfinished
class sideBarNotes
{

    //when given a PDO object it's going to get the relevant data and display that in a bootstrap card
   // in the navbar
    function makeNotes($data)//data is assumed to be a PDO object
    {
        $allRows = $data->fetchAll(PDO::FETCH_ASSOC);

        if (empty($allRows)) {
            echo "No notes to be found!"; /// table or query is empty
        } else {
            // Bootstrap card container and row
            echo "<div class='card-container row'>";

            // Output data of each row as a Bootstrap card
            foreach ($allRows as $row) {
                // Each card is within a Bootstrap column
                $Selection = $row["thought_ID"];
                echo "<div class='card'>";
                echo "<div class='card-header'>Date" . $row["updated_at"] . "</div>"; //not sure what row to use
                echo "<h5 class='card-title'>" . $row["topic_id"] . "</h5>";

                //button that links to note
                //echo "<form method='post' action=''>";
                //echo "<input type='submit' class='btn btn-primary' value='showNote'>";
                //echo "<input type='hidden' name='' value='$Selection'>";
                // echo "</form>";
                // the button has a hidden value of the card that was pressed
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }

            // Close Bootstrap card container and row
            echo "</div>";

        }
    }
}
