<?php

class ourCustomLogicHooks {

    static $processed = false;


    function update_check_date(&$bean, $event, $arguments)
    {

        if(isset($_REQUEST['custom_var']) && $_REQUEST['custom_var'] == "Accounts"){
            $do_something = "";
        }

        global $current_user;



        //Example 1:

        /**
         * Set a Bean TimeDate to the future depending on the scenario
         *
         * The Activation Date is set for an Account once it is has been paid!
         *
         */

        $activation_date_year = TimeDate::getInstance()->getNow(true)->modify("-1 day")->asDb();
        $activation_date_2_months = TimeDate::getInstance()->getNow(true)->modify("+2 months")->asDb();

        // Example 2

        /**
         * Comparing DateTimes and DateTimes.
         *
         * Ensure you have converted datetime into a matching format!
         */

        $bean_dateformat = "Y-m-d H:i:s";
        // Note!  we are setting this here as the date_entered value is not available to edit if the bean is an update.
        //  However you can overwrite this is you need to access the date by setting the bean's update_date_entered = true;
        //$bean->date_entered = "2016-10-04 08:30:21"; // This is in UTC as it is from the database

        $usertimezone = $current_user->getPreference('timezone');
        // We are creating a DateTime object by using the date's current format (DB format) and the Time Zone
        $date1 = DateTime::createFromFormat($bean_dateformat, $bean->date_modified, new DateTimeZone("UTC"));
        $date1->setTimeZone(new DateTimeZone("PST"));
        // Once we have set this DateTime object up we want to convert it to the same TimeZone as the current_user
        //$date1->setTimeZone(new DateTimeZone($usertimezone));

        $contacts = $bean->get_linked_beans("contacts", "Contacts");
        foreach($contacts as $contact){
            // When retriving a bean (as stated earlier) the record date fields
            // will be converted into the user format and timezone unlike the running logic's hook bean (above)

            /// $contact->date_entered will be in the User's TimeZone and Format
            $user_dateformat = $current_user->getPreference('datef'); // This will provide Date format m/d/Y
            $date2 = DateTime::createFromFormat($user_dateformat." H:i", $contact->date_modified, new DateTimeZone($usertimezone));
            $date2->setTimeZone(new DateTimeZone("PST"));
            break;
        }

        // Just to point out that you do not need to convert it into the user format, you can easily convert the dates into UTC


        //$date1 = "2016-10-04 10:00:21"; examples
        //$date2 = "2016-10-04 12:47:00"; examples
        if($date1 > $date2){
            // DO Something!
            $tt = "";
        }

        // If you want to only format on dates then using the DateTime classes and set the format with standard DateTime class
        $only_date1 = $date1->format("Y-m-d");
        $only_date2 = $date2->format("Y-m-d");

        //$only_date1 = "2016-10-04";
        //$only_date2 = "2016-10-04";

        if($only_date1 > $only_date2){
            // DO Something!
            $tt = "";
        }



    }
}



