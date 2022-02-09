 <!-- Blog Sidebar Widgets Column -->
 <div class="col-md-4">
 <?php
    if(isset($_POST['submit']))
    {
        echo $search = $_POST['search'];

        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
        $search_query = mysqli_query($connection, $query);

        if(!$search_query)
        {
            die("QUERY FAILED ".mysqli_error($connection));
        }

        $count = mysqli_num_rows($search_query);

        if($count == 0){
            echo "<h1>No result</h1>";
        }
        else{
            echo "<br>Some results";
        }
 
    }
    
    ?>  
     <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action = "" method = "POST">
                        <div class="input-group">
                            <input name = "search" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button name = "submit" class="btn btn-default" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </from> <!-- Search form -->
                    <!-- /.input-group -->
                </div>


                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

</div>
