<nav id = "menu">
        <img src="Images/Logo.png" alt="TS073">
    <ul>
        <li><a href="Index.php">Home</a></li>
        <li><a href="Pages/Calc.php">Calorieen Calculator</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
    </ul>
</nav>

<style>
    #menu {
    background-color: #383333c4;
    color: #FFFFFF;
    padding: 10px;
    position: fixed;
    top: 0;
    width: 100%;
}

#menu img {
    width: 60px;
    display: block;
    margin: auto;
    float: left;
}

#menu ul {
    list-style-type: none;
    display: flex;
    flex-direction: row;
    justify-content: center;
    padding: 10px;
}

#menu ul li {
    margin: 0 10px;
    cursor: pointer;
}

#menu ul li a {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-decoration: none;
    color: #FFFFFF;
}

#menu ul li a:hover {
    transition: all 0.2s ease-in-out;
    color: #a1a1a1;
}
</style>
