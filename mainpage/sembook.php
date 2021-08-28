<?php 
session_start();

	include("../connection.php");
	include("function.php");
    $user_data = check_login($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sem Book</title>
        <link rel="stylesheet" href="sembook.css">
        <script src="https://kit.fontawesome.com/23aecf465a.js" crossorigin="anonymous"></script>
        <script src="sembook.js"></script>
    </head>
    <body>
        <nav>
            <h2>Sem Book</h2>
            <div>
                <button id="logout" class="logout" title="logout" onclick="window.location.href='../logout.php'"><i class="fas fa-sign-out-alt"></i></button>
                <button id="book" class="book" title="book" onclick="popup()"><i id="book-icon" class="fas fa-book"></i></button>
            </div>
        </nav>
        <section>
            <div class="popup" id="popup">
                <h2>Books<i class="fas fa-plus popup-icon"></i></h2>
                <div class="popup-display">
                    <ul>
                        <li><h3>Book1<i class="fas fa-trash popup-icon"></i></h3></li>
                        <li><h3>Book2<i class="fas fa-trash popup-icon"></i></h3></li>
                        <li><h3>Book3<i class="fas fa-trash popup-icon"></i></h3></li>
                    </ul>
                </div>
            </div>
            <div class="book-page" id="book-page">
                <div class="toolbar" id="toolbar">
                    <div class="start">
                        <ul>
                            <li><i class="fas fa-bold icon" id="bold" onclick="design(this.id)" title="Bold"></i></li>
                            <li><i class="fas fa-italic icon" id="italic" onclick="design(this.id)" title="Italic"></i></li>
                            <li><i class="fas fa-underline icon" id="underline" onclick="design(this.id)" title="Underline"></i></li>
                            <li>
                                <select id="FontFamily" name="FontFamily" oninput="design(this.id);">
                                    <option> Serif </option>
                                    <option> Arial </option>
                                    <option> Sans-Serif </option>                                  
                                    <option> Tahoma </option>
                                    <option> Verdana </option>
                                    <option> Lucida Sans Unicode </option>                               
                                  </select>
                            </li>
                            <li>
                                <label for="fontsize">4</label>
                                <input type="range" id="fontsize" oninput="design(this.id)" value="11" min="4" max="72"/>
                                <label for="fontsize">72</label>
                            </li>
                            <li><input type="color" id="fontcolor" oninput="design(this.id)" value="#000000"/></li>
                        </ul><br>
                        <label>Font Format</label>
                    </div>
                    <div>
                        <ul>
                            <li><i class="fas fa-align-left icon" id="Aleft" onclick="design(this.id)" title="Align Left"></i></li>
                            <li><i class="fas fa-align-center icon" id="Acenter" onclick="design(this.id)" title="Align Center"></i></li>
                            <li><i class="fas fa-align-right icon" id="Aright" onclick="design(this.id)" title="Align Right"></i></li>
                            <li><i class="fas fa-align-justify icon" id="Ajustify" onclick="design(this.id)" title="Align Justify"></i></li>
                            <li><input type="color" id="color" oninput="design(this.id)" value="#ffffff"/></li>
                        </ul><br>
                        <label class="pageformat">Page Format</label>
                    </div>
                    <div>
                        <ul>
                            <li><input type="file" id="image" accept="image/jpeg, image/png, image/gif" onchange="pasteImage('1')"/></li>
                        </ul><br>
                        <label>Image Tools</label>
                    </div>
                    <div>
                        <ul>
                            <li><i class="fas fa-angle-double-left icon" id="PStart" title="First Page"></i></li>
                            <li><i class="fas fa-arrow-left icon" id="Pleft" title="Previous Page"></i></li>
                            <li><i class="fas fa-arrow-right icon" id="Pright" title="Next Page"></i></li>
                            <li><i class="fas fa-angle-double-right icon" id="PEnd" title="Last Page"></i></li>
                        </ul><br>
                        <label>Tools</label>
                    </div>
                    <div class="save">
                        <form action="save.php" autocomplete="off" method="POST" id="save">
                            <input type="hidden" name="FileName" />
                            <input type="hidden" name="content" />
                            <ul>
                                <li onclick="save()"><i class="fas fa-save"></i></li>
                            </ul>
                        </form><br>
                        <label>Save</label>
                    </div>
                </div>
                <div class="page-section">
                    <div contenteditable="true" class="page" id="1"></div>
                </div>
            </div>
        </section>
    </body>
</html>