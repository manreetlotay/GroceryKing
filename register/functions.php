<?php

// user list

function display_users()
{
    $xml = simplexml_load_file('userInfo.xml') or die("Error: Cannot create object");
      
    foreach ($xml->children() as $user) {
        if ($user->getName() == "user") {
            
            $user_out = <<<DELIMITER
              <tr>
                <td>
                <h2>User:</h2>
            
               <h3>Personal Information :</h3>
                <ul>
                <li>ID: $user->id</li>
                <li>Firstname: $user->firstName</li>
                <li>Lastname:$user->lastName</li>
                <li>E-mail: $user->email</li>
                <li>Phone number: $user->phoneNumer</li>
                </ul>
           
               <h3>User Address :</h3>
                <ul>
                  <li>Country: $user->country</li>
                  <li>Province: $user->province</li>
                  <li>City: $user->city</li>
                  <li>Street address: $user->streetAddress</li>
                  <li>Apt, Suite, Unit, Building: $user->apt</li>
                  <li>Postal code: $user->postalCode</li>
                </ul>
                
                    <a class="edit-action" href="user-edit.php?id={$user->id}">Edit</a>
                    <a class="delete-action" href="delete-user.php?id={$user->id}">Delete</a>
                </td>
              </tr>
              DELIMITER;
            echo $user_out;
        } 
}
}

//return user XML, used for editing user information
function getUserXml($user_id)
{
    $xml = simplexml_load_file('userInfo.xml') or die("Error: Cannot create object");
    $user_xml = NULL;

    foreach ($xml->children() as $user) {
        if($user->getName() == "user"){
            if ($user->id == $user_id) {
                $user_xml = $user;
                break;
            }
        }
        
    }

    return $user_xml;
}

//delete a user from users.xml
function deleteUserXml($user_id)
{
    $xml = new DOMDocument;
    $xml->load('userInfo.xml');
    $xpath = new DOMXpath($xml);
    foreach ($xpath->query('//user[id="' . $user_id . '"]') as $node) {
        $node->parentNode->removeChild($node);
    }
    $xml->save('userInfo.xml');
}

//returns next unused user ID

function getNextUserID()
{
    $xml = simplexml_load_file('userInfo.xml') or die("Error: Cannot create object");
    $nextID = $xml->next[0];

    return $nextID;
}
