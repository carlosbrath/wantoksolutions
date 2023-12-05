document.addEventListener("DOMContentLoaded", function() {
    var progressBarConfigs = [
        { container: "#circle-container-1", color: "blue" },
        { container: "#circle-container-2", color: "red" },
        { container: "#circle-container-3", color: "green" },
        // Add more configurations as needed
      ];
      progressBarConfigs.forEach(function(config) {
        var progressBar = new ProgressBar.Circle(config.container, {
          color: config.color,
          strokeWidth: 3,
          duration: 2000, // milliseconds
          easing: "easeInOut",
        });
        progressBar.animate(0.8);
    });
});