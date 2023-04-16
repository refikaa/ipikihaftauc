<form method="post" action="/db/insert">
    @csrf
    <input type="text" name="title" placeholder="title" /> <br /><br />
    <textarea name="summary" placeholder="summary"></textarea> <br /><br />
    <textarea name="content" placeholder="content"></textarea> <br /><br />
    <input type="submit" value="Create News!">
</form>


