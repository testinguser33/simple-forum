<h1 align="center">Simple Forum</h1>

<h3 align="center">Database structure</h1>

<h4>forum - table</h4>
<table>
<tr>
    <th>Forum_ID(int - 3)</th>
    <th>Forum_Name(varchar - 255)</th>
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
    <th>Category_ID(int - 3)</th>
    <th>Category_Name(varchar - 255)</th>
    <th>Category_Description(varchar - 255)</th>
    <th>Category_TopicsNum(int - 255)</th>
    <th>Category_PostsNum(int - 255)</th>
    <th>Forum_ID(int - 3)</th>
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
    <th>Topic_ID(int - 7)</th>
    <th>Topic_Name(varchar - 255)</th>
    <th>Topic_Replies(int - 255)</th>
    <th>Topic_Views(int - 255)</th>
    <th>Category_ID(int - 3)</th>
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
    <th>User_ID(int - 10)</th>
    <th>User_Username(varchar - 120)</th>
    <th>User_Password(varchar - 120)</th>
    <th>User_Email(varchar - 120)</th>
    <th>User_GameName(varchar - 120)</th>
    <th>User_Avatar(text)</th>
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