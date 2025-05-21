<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVG Morph on Hover</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Apply Inter font and center content */
        body {
            font-family: "Inter", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0; /* Light grey background for the page */
            margin: 0;
            overflow: hidden; /* Prevent scrollbars if content slightly exceeds viewport */
        }

        /* Container for the SVG, acting as the main blue box */
        .svg-container {
            width: 200px; /* Matching the SVG width */
            height: 200px; /* Matching the SVG height */
            position: relative;
            cursor: pointer; /* Indicate interactivity */
            border-radius: 38px; /* Rounded corners for the container, matching provided SVG */
            overflow: hidden; /* Ensure content inside is clipped to rounded corners */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            background-color: #3F51B5; /* Blue background for the container, matching provided SVG */
            display: flex;
            justify-content: center;
            align-items: center;
            /* Tailwind classes for transition and hover effect */
            transition: all 0.3s ease-in-out;
        }

        /* Scale effect on hover for the entire container */
        .svg-container:hover {
            transform: scale(1.05);
        }

        /* Styling for the SVG element itself */
        svg {
            position: absolute; /* Position relative to the container */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* The inner blue box defined by a rect element within the SVG */
        .blue-box {
            fill: #3F51B5; /* A slightly darker blue for the inner box, matching provided SVG */
        }

        /* The path element that will morph (initially 'F', then arrow) */
        .morph-path {
            fill: white; /* Color of the morphing shape (F or arrow) */
            stroke: white; /* Adding stroke as per provided SVGs */
            stroke-width: 1px; /* Default stroke width, can be adjusted */
        }
    </style>
</head>
<body>

    <div id="svgContainer" class="svg-container">
        <svg viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet">
            <rect x="0" y="0" width="200" height="200" rx="38" class="blue-box"></rect>
            <!--
                The path element for the letter F.
                The 'd' attribute defines the shape.
                Updated with the path data for the Facebook 'F' logo.
            -->
            <path id="morphPath" class="morph-path" d="M115.5 97V168.5L142.5 168.337V97H161V77H142.5V70L143 66L145 62.5L148.5 59.5L153.5 58.5H158L163 59.5V39L160.5 38L152.5 37H146.5L140 38L134.5 39.5L129.5 42L123 46.5L119.5 51.5L117.5 56L116 62L115 69.5V76.5H100V97H115.5Z"></path>
        </svg>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/MorphSVGPlugin.min.js"></script>

    <script>
        // Register the MorphSVGPlugin with GSAP
        gsap.registerPlugin(MorphSVGPlugin);

        // Get references to the SVG container and the morphing path
        const svgContainer = document.getElementById('svgContainer');
        const morphPath = document.getElementById('morphPath');

        // Define the SVG path data for the letter 'F' and the arrow.
        // Updated with the path data from your provided SVGs.
        const pathF = "M115.5 97V168.5L142.5 168.337V97H161V77H142.5V70L143 66L145 62.5L148.5 59.5L153.5 58.5H158L163 59.5V39L160.5 38L152.5 37H146.5L140 38L134.5 39.5L129.5 42L123 46.5L119.5 51.5L117.5 56L116 62L115 69.5V76.5H100V97H115.5Z";
        const pathArrow = "M33 112.5H121L71 163H105.5L167.5 99.5L105 37H71L121 87.5H33V112.5Z";

        // Variable to track the current state of the morph (true if morphed to arrow)
        let isMorphed = false;
        // Variable to hold the GSAP tween instance, allowing it to be killed if needed
        let morphTween;

        // Add event listener for mouse entering the SVG container
        svgContainer.addEventListener('mouseenter', () => {
            // Only morph if it's not already morphed
            if (!isMorphed) {
                // Kill any ongoing morph tween to prevent conflicts if the user
                // rapidly hovers in and out.
                if (morphTween) {
                    morphTween.kill();
                }
                // Create a new GSAP tween to morph the path to the arrow shape
                morphTween = gsap.to(morphPath, {
                    duration: 0.5, // Animation duration in seconds (increased)
                    morphSVG: pathArrow, // Target SVG path data
                    ease: "power2.inOut" // Easing function for smooth animation (changed)
                });
                isMorphed = true; // Update the state
            }
        });

        // Add event listener for mouse leaving the SVG container
        svgContainer.addEventListener('mouseleave', () => {
            // Only morph back if it is currently morphed
            if (isMorphed) {
                // Kill any ongoing morph tween to prevent conflicts
                if (morphTween) {
                    morphTween.kill();
                }
                // Create a new GSAP tween to morph the path back to the 'F' shape
                morphTween = gsap.to(morphPath, {
                    duration: 0.5, // Animation duration in seconds (increased)
                    morphSVG: pathF, // Target SVG path data (back to F)
                    ease: "power2.inOut" // Easing function (changed)
                });
                isMorphed = false; // Update the state
            }
        });
    </script>
</body>
</html>