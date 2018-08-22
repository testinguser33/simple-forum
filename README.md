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
    <td>2</td>
    <td>Some category name..</td>
    <td>Some category description..</td>
    <td>Number of topics in category..</td>
    <td>Number of posts in category..</td>
    <td>ForumID..</td>
</tr>
</table>