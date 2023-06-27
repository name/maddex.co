<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <link rel="icon" href="/images/av32x32.png" />
    <link rel="apple-touch-icon" href="/images/av256x256.png" />
    <meta name="robots" content="index,follow" />
    <title>Charlie Maddex</title>
    <meta name="description" content="Charlie Maddex's site" />
    <meta name="theme-color" content="#ffffff" />
    <meta property="og:title" content="Charlie Maddex" />
    <meta property="og:description" content="Charlie Maddex's site." />
    <meta property="og:url" content="https://maddex.co" />
    <meta name="twitter:image" content="https://maddex.co/images/banner.jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_IE" />
    <meta property="og:site_name" content="Charlie Maddex" />
    <meta property="og:image:alt" content="og image" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@cunjur" />
    <meta name="twitter:creator" content="@cunjur" />
    <meta name="twitter:title" content="no e-mail" />
    <meta name="twitter:description" content="charlie's journal" />
    <style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    body,
    html {
        max-width: 100vw;
        overflow-x: hidden;
        padding: .5rem;
    }

    section {
        display: block;
    }

    li {
        display: list-item;
        text-align: -webkit-match-parent;
    }
    </style>
</head>

<body>
    <div>
        <main>
            <p style="margin-bottom:1em;font-weight:800">charlie maddex</p>
            <ul>
                <li style="color:red;margin-bottom:1rem;font-family:monospace;letter-spacing:0.03em;font-weight:bold">
                    Twitter: <a rel="noopener noreferrer" target="_blank" style="margin-left:2px;color:blue"
                        href="https://twitter.com/cunjur">@cunjur</a>
                    Github: <a rel="noopener noreferrer" target="_blank" style="margin-left:2px;color:blue"
                        href="https://github.com/name">@name</a>
                    E-mail: <a rel="noopener noreferrer" target="_blank" style="margin-left:2px;color:blue"
                        href="mailto:charlie@anglo.is">charlie@anglo.is</a>
                    PGP: <a rel="noopener noreferrer" target="_blank" style="margin-left:2px;color:blue"
                        href="https://maddex.co/pgp">here</a>
                </li>
                <li>
                    I'm a Senior Technical Analyst at an MSP, working on Cloud Infrastructure, DevOps, and
                    Automation.<br>
                    I'm also
                    working on a personal project called Anglo, a low-latency storage and database platform as
                    well<br> as various open-source projects on my Github.
                </li>
                <li>
                    <br>
                    Want to reach out? See my email or twitter above.
                </li>
                <li>
                    <br>
                    <a rel="noopener noreferrer" target="_blank" style="margin-left:2px;color:blue"
                        href="https://maddex.co/images/incident.mp4">incident.mp4</a>
                    <a rel="noopener noreferrer" target="_blank" style="margin-left:2px;color:blue"
                        href="https://www.youtube.com/watch?v=S8s9uzPIqQ4">gentoo.mp4</a>
                    <a rel="noopener noreferrer" target="_blank" style="margin-left:2px;color:blue"
                        href="https://maddex.co/images/arnold.png">arnold.png</a>
                    <a rel="noopener noreferrer" target="_blank" style="margin-left:2px;color:blue"
                        href="https://maddex.co/images/mycalendar.jpg">mycalendar.jpg</a>
                    <a rel="noopener noreferrer" target="_blank" style="margin-left:2px;color:blue"
                        href="https://maddex.co/images/whatsonyourmind.jpg">whatsonyourmind.jpg</a>
                </li>
            </ul>

            <br>
            <p style="margin-bottom:1em;font-weight:800">notes</p>
            <?php
				// Get the contents of a website
				$homepage = file_get_contents('https://raw.githubusercontent.com/name/maddex.co/main/notes/notes.html');
				echo $homepage;
			?>
        </main>
    </div>
</body>

</html>