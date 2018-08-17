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
                <td><a class="LastPostLink" href="#"><?php echo $category->Category_LastPost; ?></a> <br/> by <a class="LastPostLink" href="#"><?php echo $category->Category_LastPerson; ?></a> <?php echo $category->Category_LastTime; ?></td>
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


    <!-- <div class="container">
        <table class="table table-hover borderless">
                <thead>
                <tr class="MainRow">
                    <th class="thRadius" colspan="4"><a class="TableLink" href="#">Server Discussion & Support</a></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a class="TableFirst" href="#">General Talk</a> <br/> Talk about anything related to the community.</td>
                    <td>1550 <br/> <dfn>Topics</dfn></td>
                    <td>184133 <br/><dfn>Posts</dfn></td>
                    <td><a class="LastPostLink" href="#">Player notified of this playe…</a> <br/> by <a class="LastPostLink" href="#">NotifyBot</a> Today, 2:10 am</td>
                </tr>
                <tr>
                    <td><a class="TableFirst" href="#">Server Suggestions</a> <br/> Here you can find basic information about the community. </td>
                    <td>1193 <br/> <dfn>Topics</dfn></td>
                    <td>27470 <br/><dfn>Posts</dfn></td>
                    <td><a class="LastPostLink" href="#">[woot] Antonuos_Cross - Aimbo…</a> <br/> by <a class="LastPostLink" style="color: #00CCFF;" href="#">Antonuos_Cross</a> Yesterday, 10:14 am</td>
                </tr>
                </tbody>
            </table>
        </div> -->
    </article>