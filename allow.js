document.addEventListener('DOMContentLoaded', () => {
    const videoUpload = document.getElementById('videoUpload');
    const payButton = document.getElementById('payButton');
    const infoText = document.getElementById('infoText');
    let hasPaid = false;

    // Initially allow only one video
    videoUpload.disabled = false;
    videoUpload.onchange = function() {
        if (!hasPaid && this.files.length > 1) {
            alert('You can only upload 1 video at a time. Please pay to upload more.');
            this.value = ""; // Clear the selected files
        }
    };

    // Simulate payment
    payButton.addEventListener('click', () => {
        // In a real scenario, you would integrate with a payment gateway here
        alert('Payment successful. You can now upload up to 10 videos.');
        hasPaid = true;
        videoUpload.disabled = false;
        videoUpload.onchange = function() {
            if (this.files.length > 10) {
                alert('You can upload up to 10 videos.');
                this.value = ""; // Clear the selected files
            }
        };
        infoText.textContent = "You can upload up to 10 videos.";
        payButton.disabled = true; // Disable the payment button
    });

    // Form submission handling
    document.getElementById('uploadForm').addEventListener('submit', (event) => {
        event.preventDefault();
        if (videoUpload.files.length === 0) {
            alert('Please select a video to upload.');
        } else {
            alert('Videos uploaded successfully!');
            // Here, you would handle the actual upload process
        }
    });
});
