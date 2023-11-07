// Function to handle image zoom
function handleImageZoom(imageSrc) {
    const imageOverlay = document.getElementById('image-overlay');
    const zoomedImage = document.getElementById('zoomed-image');

    // Set the clicked image source as the zoomed image source
    zoomedImage.src = imageSrc;

    // Show the image overlay
    imageOverlay.style.display = 'block';

    // Close the zoomed image on overlay click
    imageOverlay.addEventListener('click', function () {
        imageOverlay.style.display = 'none';
    });
}

// Get all the images with the "zoomable-image" class
const zoomableImages = document.querySelectorAll('.zoomable-image');

// Add click event listeners to each zoomable image
zoomableImages.forEach(function (image) {
    image.addEventListener('click', function () {
        handleImageZoom(this.src);
    });
});

// Function to close the zoomed image
function closeZoomedImage() {
    const imageOverlay = document.getElementById('image-overlay');
    imageOverlay.style.display = 'none';
}

// Get the close button element for image zoom
const closeImageButton = document.getElementById('close-image-button');

// Add a click event listener to close the zoomed image
closeImageButton.addEventListener('click', closeZoomedImage);

// Function to open the video modal
function openVideoModal() {
    const videoModal = document.getElementById('video-modal');
    const videoFrame = document.getElementById('video-frame');
    videoModal.style.display = 'block';
    videoFrame.src = 'https://www.youtube.com/embed/KkRQsURQjH4'; // Replace with your actual YouTube video ID
}

function closeVideoModal() {
    const videoModal = document.getElementById('video-modal');
    const videoFrame = document.getElementById('video-frame');
    videoModal.style.display = 'none';
    videoFrame.src = '';
}

// Add click event listeners for the video modal
trailerImage.addEventListener('click', openVideoModal);

// Get the close button element for the video modal
const closeVideoButton = document.getElementById('close-video-button');

// Add a click event listener to close the video modal
closeVideoButton.addEventListener('click', closeVideoModal);

function openVideoModal() {
    const videoModal = document.getElementById('video-modal');
    const videoFrame = document.getElementById('video-frame');
    videoModal.style.display = 'block';
    videoFrame.src = 'https://www.youtube.com/embed/KkRQsURQjH4?rel=0&showinfo=0&autohide=1'; // Add '?rel=0&showinfo=0&autohide=1' to the URL
}
