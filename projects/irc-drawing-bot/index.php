<!DOCTYPE html>
<html lang="en">

<!--Copyright Jamie Scaife-->
<!--Legal Information at https://www.jamieweb.net/contact-->

<head>
    <title>IRC Drawing Bot</title>
    <meta name="description" content="IRC Drawing Bot">
    <meta name="keywords" content="Jamie, Scaife, jamie scaife, jamiescaife, jamieonubuntu, jamie90437, jamie90437x, jamieweb, jamieweb.net">
    <meta name="author" content="Jamie Scaife">
    <link href="/jamie.css" rel="stylesheet">
    <link href="https://www.jamieweb.net/projects/irc-drawing-bot/" rel="canonical">
</head>

<body>

<?php include "navbar.php"; ?>

<div class="body">
    <h1>IRC Drawing Bot</h1>
    <hr><br>
<center><table class="irc">
<?php set_time_limit(1); echo "<tr><td bgcolor=\"" . str_replace(":", "\"></td></tr>\n<tr><td bgcolor=\"", str_replace(" ", "\"></td><td bgcolor=\"", str_replace("\n", "", preg_replace("/[^A-Za-z0-9: ]/", "", file_get_contents("config.txt"))))) . "\"></td></tr>\n"; ?>
</table></center>
    <h2>What is this?</h2>
    <p>The IRC Drawing Bot is an <a href="https://simple.wikipedia.org/wiki/Internet_Relay_Chat">Internet Relay Chat</a> bot that <b>you</b> can control, allowing you to paint pixels on the canvas above.</p>
    <p>This is not a fancy art project, it is designed to demonstrate how IRC can be used to securely control a web page. The collaborative pixel canvas is inspired from <a href="https://www.reddit.com/r/place">Reddit's r/place</a>.</p>
    <p>In order to paint your own pixels, you must connect to the JamieWeb IRC server. Details for this are available <a href="/irc/">here</a>.</p>
    <h2>How do I control it?</h2>
    <p>Once you are connected to the IRC server, join the channel #bot using the command "/join bot". Just enter "/join bot" into the chat input of your IRC client.</p>
    <p>The bot is controlled using commands, all of which must be prefixed with an exclamation mark (!). All available commands are listed below:</p>
    <pre><b>!hello</b> - Make sure that the bot is responding. The bot should reply with "Hello!".
<b>!help</b> - Displays a link back to this page and the blog post for technical details.
<b>!move &lt;x&gt; &lt;y&gt;</b> - Select a pixel coordinate. Must be an integer 1-20 for x and 1-10 for y. Example: "!move 12 4"
<b>!colour &lt;colour&gt;</b> - Select a colour. Example: "!colour red"
<b>!colours</b> - View a list of supported colours.
<b>!draw</b> - Draws a pixel at the coordinates you selected using the colour you selected.</pre>
    <p>In order to enter a command, enter it into the chat input of your IRC client.</p>
    <p>Once you have painted a pixel, refresh this page to see it!</p>
    <h2>Why are there so many steps to draw one pixel?</h2>
    <p>I decided to have separate commands for selecting the coordinates and colour in order to allow people to either collaborate or conflict with eachother. This is similar to how it worked on r/place, however in my implementation, people can fight over where to place the pixel as well.</p>
    <h2>How does it work?</h2>
    <p>For technical details, please see the <a href="/blog/irc-drawing-bot/">associated blog post</a> and view the <a href="https://github.com/JamieOnUbuntu/irc-bot/">project on GitHub</a>. Thank you!</p>
</div>

<?php include "footer.php" ?>

</body>

</html>