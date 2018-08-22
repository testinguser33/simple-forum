<h1 align="center">Simple Forum</h1>

<h3 align="center">Database structure</h1>

<h4>forum - table</h4>
<table>
<tr>
    <th>Forum_ID</th>
    <th>Forum_Name</th>
</tr>
<tr>
    <td>1</td>
    <td>Some text here</td>
</tr>
<tr>
    <td>2..</td>
    <td>Some text here..</td>
</tr>
</table>

<h4>category - table</h4>
<table>
<tr>
    <th>Category_ID</th>
    <th>Category_Name</th>
    <th>Category_Description</th>
    <th>Category_TopicsNum</th>
    <th>Category_PostsNum</th>
    <th>Forum_ID</th>
</tr>
<tr>
    <td>1</td>
    <td>Some category name</td>
    <td>Some category description</td>
    <td>Number of topics in category</td>
    <td>Number of posts in category</td>
    <td>1</td>
</tr>
<tr>
    <td>2..</td>
    <td>Some category name..</td>
    <td>Some category description..</td>
    <td>Number of topics in category..</td>
    <td>Number of posts in category..</td>
    <td>ForumID..</td>
</tr>
</table>

<h4>topic - table</h4>
<table>
<tr>
    <th>Topic_ID</th>
    <th>Topic_Name</th>
    <th>Topic_Replies</th>
    <th>Topic_Views</th>
    <th>Category_ID</th>
</tr>
<tr>
    <td>1</td>
    <td>Some topic title</td>
    <td>Number of topic replies</td>
    <td>Number of topic views</td>
    <td>1</td>
</tr>
<tr>
    <td>2..</td>
    <td>Some topic title..</td>
    <td>Number of topic replies..</td>
    <td>Number of topic views..</td>
    <td>CategoryID..</td>
</tr>
</table>

<h4>user - table</h4>
<table>
<tr>
    <th>User_ID</th>
    <th>User_Username</th>
    <th>User_Password</th>
    <th>User_Email</th>
    <th>User_GameName</th>
    <th>User_Avatar</th>
</tr>
<tr>
    <td>1</td>
    <td>Username</td>
    <td>Password</td>
    <td>some@email.com</td>
    <td>Name_Lastname</td>
    <td>Image_Path</td>
</tr>
<tr>
    <td>2</td>
    <td>JohnWick</td>
    <td>123Password</td>
    <td>John.Wick@gmail.com</td>
    <td>John_Wick</td>
    <td>img/avatars/imgName.jpg</td>
</tr>
</table>