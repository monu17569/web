* This project consists of 2 levels one is for public view and other is private view(i.e. Admin)
* It consists of 3 folder namely
        
        1.dynamic --> This contains 18 files which is available on   dropdown menu of    the navbar in Homepage.
        

        2.img --> This folder contains images which is shown as a clickable links(a hyperlinks) on the Home page .

        3.profile --> This folder is for admin purpose . Is contains 36 file 
              (18 + 18) ==> 18 files for CRUD (Create, Read, Update, Delete ) operation
              and 18 for the add new (in which admin can add a particular details)operation

             ````````````````````````` Naming Convention```````````````````````````````
             For example.  if a file name is  awards.php for CRUD operation
                            then for the add new operation file name will be
                            newAwards.php

                    Like this same convention for 18 + 18 files which is mentioned as above.

* this project also inclues 6 files namely*
        1.admin.php --> this is login file for admin it has uername and passwords to get loged in.

                  Username and password can be changed from database whatever admin wants.
        
        2.dashboard.php --> This page is just like Homepage for admin in which all the catlouged can be seen if any CRUD opeations requires just click on that particular buttons and maupuate its data.
             Remember :-- This can be only accessed if an  admin is loged in otherwise not able to access.
        
        3.logout.pph --> this is just to maintain the session if admin LOGOUT it will destroy the session .

        4.login.css --> In this some css for the Login page.
        
        5.style.css --> In this some css for the Homapage which is public

        6. index.php --> This page is Home page  with subsetions like
                    #navbar
                    #Name and Details
                    #links
                    #latest (any attachments /links / pdf you can add)
                    #biography
                    #Contact me and map
                    #footer


                    ********       **       *********       **     
                    **    **     **  **         *         **  **      
                    **    **    ********        *        ********
                    ********   **      **       *       **      **    
                                                                      


*for connection to database
 you have to make a database name  first 
 and table for all the items which are in dynamic in nature (i.e. 18 tables + 1 for admin in which username and password will be there)

 Namely:-
          1. admin
                id    adminname   password
          2. awards
                id    awardname   Disc
          3. bookchapter
                id    Disc    years
          4. books
                id    Disc    years
          5. conference
                id    Disc    years
          6. degree
                id    courseName    universityName    startDate   endDate
          7. experience
                id  universityname   designation   Disc    startDate   endDate
          8. fdp
                id    topic   duration    organization
          9. fundedprojects
                id    title   fundingagency   duration   rol  stat
          10. indexingatsci
                id    Disc    impactfactor    years   
          11. indexingatscopus
                id    Disc    years
          12. mca
                id    names   rollno    title   duration    
          13. membership
                id    organization    idno    
          14. msc
                id   names    rollno    title   duration    category  
          15. phd
                id    names   title   stat    
          16. referred
                id    Disc    years
          17. reviewer
                id    journal   indexed   publisher    
          18. subjectexpertise
                id    subj    perc
          19. workshop
                id    organization    topic   startDate   endDate



                ** In the above scheme i have used status for stat (etc.) because that was a keyword used in SQL therefore, we can't use it .


  this is last before complition of this project 👨

    *During  hosting time  we get a  username and password of the database we have  to keep in mind what we have created.

    #As belowe you can see below example for localhost database and for production database only servername remains same and username password and database you have to change in all 18 files of  dynamic folder and (18+18) files of profile folder. i.e. totle 54 changes needed to run a project smoothly. 


 -------Example--------   
                // for localhost
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "portfolio";


                // for production
                // $servername = "localhost";
                // $username = "id18903059_root";
                // $password = "DLIcutTda>1k8fju";
                // $database = "id18903059_poftfolio";


Thankyou.












