<article class="main">
    <!-- Sectin start -->

        <?php
            $allForums = Forum::GetAllForums();
            foreach($allForums as $forum){

             
        ?>

        <div class="container">
        <table class="table table-hover borderless">
            <thead>
            <tr class="MainRow">
                <th class="thRadius" colspan="4"><a class="TableLink" href="viewforum.php?f=<?php echo $forum->Forum_ID; ?>"><?php echo $forum->Forum_Name; ?></a></th>
            </tr>
            </thead>
            <tbody>
            <?php
                $allCategories = Category::GetAllCategories($forum->Forum_ID);
                foreach($allCategories as $category){
            ?>
               
            <tr>
             <td><a class="TableFirst" href="viewforum.php?c=<?php echo $category->Category_ID; ?>"><?php echo $category->Category_Name; ?></a> <br/> <?php echo $category->Category_Description; ?></td>
                <td><?php echo $category->Category_TopicsNum; ?> <br/> <dfn>Topics</dfn></td>
                <td><?php echo $category->Category_PostsNum; ?> <br/><dfn>Posts</dfn></td>
                <td><a class="LastPostLink" href="#"><?php echo $category->Category_LastPost; ?></a> <br/> by <a class="LastPostLink" href="#"><?php echo $category->Category_LastPerson; ?></a> <?php DateTimeFormat::Convert($category->Category_LastTime); ?></td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        </div>

        <div class="chunk2"></div>

        <?php
                
            }
        ?>
        <!-- Sectin close -->
    </article>