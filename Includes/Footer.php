<footer id="footer">
    <div class="footer-content">
        <ul class="footer-links">
            <li><a href="../Index.php">Home</a></li>
            <li><a href="../Pages/Calc.php">Calorieen Calculator</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </div>
    <?php echo "&copy; " . date("Y") . " Trainstation073"; ?>
</footer>

<style>
    #footer {
        background-color: #383333;
        color: #FFFFFF;
        padding: 20px;
        text-align: center;
        margin-top: 10vh; /* Changed to 10vh */
    }

    #footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .footer-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .footer-links {
        list-style-type: none;
        padding: 0;
        display: flex;
        gap: 15px;
    }

    .footer-links li a {
        color: #FFFFFF;
        text-decoration: none;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .footer-links li a:hover {
        color: #a1a1a1;
        transition: color 0.2s ease-in-out;
    }
</style>

