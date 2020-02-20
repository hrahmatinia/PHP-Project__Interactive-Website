<html>
    <head>
        <title>Quiz</title>
        <link rel="stylesheet" type="text/css" href="Styles/Kuiz.css"/>
        <script src="JavaScript/TryitYourself.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.7/ace.js"></script>
        
    </head>
    <body >
        <header>
            <div class="container">
                <h1>JavaScript Quiz</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <h2>Add Questions to the DataBase</h2>
                <form method="post" action="admin.php">
                    <p>
                        <label> Question Number</label>
                        <input type="number" name="quwstion_number" />
                    </p> 
                     <p>
                        <label> Question Number</label>
                        <input type="text" name="quwstion_content" />
                    </p> 
                    <p>
                        <label> Option #1</label>
                        <input type="text" name="Option1" />
                    </p> 
                     <p>
                        <label> Option #2</label>
                        <input type="text" name="Option2" />
                    </p> 
                     <p>
                        <label> Option #3</label>
                        <input type="text" name="Option2" />
                    </p> 
                     <p>
                        <label> Option #4</label>
                        <input type="text" name="Option4" />
                    </p> 
                     <p>
                        <label> Option #5</label>
                        <input type="text" name="Option5" />
                    </p> 
                     <p>
                        <label> Correct Answer Number</label>
                        <input type="number" name="correct_Answer" />
                    </p> 
                     <p>
                       
                         <input type="submit" name="submit"  value="Submit"/>
                    </p> 
                </form>
            </div>
            
        </main>
        <footer>
            Copyright &COPY; 2020,  TEDSCHOOL.COM
        </footer>
    </body>
</html>



