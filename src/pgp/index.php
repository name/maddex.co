<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <link rel="icon" href="/images/av32x32.png" />
    <link rel="apple-touch-icon" href="/images/av256x256.png" />
    <meta name="robots" content="index,follow" />
    <title>PGP Public Key</title>
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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <style>
    .key {
        font-family: 'Open Sans';
        font-size: 85%
    }

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    body,
    html {
        max-width: 100vw;
        overflow-x: hidden;
        font-antialiasing: antialiased;
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
            <p style="margin-bottom:1em;font-weight:800">pgp </p>
            <div style="margin-bottom:4rem">
                <ul>
                    <li
                        style="color:red;margin-bottom:1rem;font-family:monospace;letter-spacing:0.03em;font-weight:bold">
                        #
                        2023.06.18
                    </li>
                </ul>
                <section>
                    <p class="key">
                        <?php
                        $file = fopen("pgp.txt", "r");

                        while (!feof($file)) {
                            echo fgets($file) . "<br />";
                        }

                        fclose($file);
                        ?>
                    </p>
                </section>
            </div>
        </main>
    </div>
</body>

</html>