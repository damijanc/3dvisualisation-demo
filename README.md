# 3D Product Viewer Demo

This project demonstrates several approaches for displaying 3D objects on the web using different JavaScript libraries and frameworks. It's built with Symfony and provides a simple way to explore various 3D visualization techniques.

## Features

- **Multiple 3D Visualization Libraries**:
  - [Google's Model Viewer](https://modelviewer.dev/): Easy, standards-based 3D viewer with AR support
  - [Three.js](https://threejs.org/): Highly customizable 3D engine with interactive controls
  - [Babylon.js](https://www.babylonjs.com/): Powerful, high-performance 3D engine

- **Framework Integration Examples**:
  - Vanilla JavaScript implementation
  - React integration
  - Vue integration

- **Browser-Only Implementation**: All dependencies are loaded from CDN, no Node.js required
- **Symfony Backend**: Provides routing and template rendering

## Requirements

- PHP 8.4 or higher
- Composer
- Docker and Docker Compose (optional, for containerized environment)
- Web browser with WebGL support

## Installation

### Option 1: Local Development with Docker

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd 3d-visualisation
   ```

2. Start the Docker containers:
   ```bash
   docker compose up -d
   ```
   > Note: The container will automatically run `composer install` for you. This is useful if you don't have PHP installed locally.

3. Access the application:
   - The application will be available at `http://localhost:8080`
   - The PHP service runs on port 9000
   - The Nginx service serves the application on port 8080

4. (Optional) If you need to run Composer commands manually:
   ```bash
   docker compose exec php composer [command]
   ```
   For example:
   ```bash
   docker compose exec php composer require some/package
   ```

### Option 2: Local Development without Docker

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd 3d-visualisation
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Start the Symfony development server:
   ```bash
   symfony server:start
   ```

## Usage

1. Open your browser and navigate to `http://localhost:8080` (Docker) or `http://localhost:8000` (Symfony server)
2. The homepage displays links to the different 3D visualization demos:
   - Model Viewer (Google): Simple, standards-based 3D viewer
   - Three.js: Advanced 3D engine with customizable features
   - Babylon.js: High-performance 3D engine

3. Click on any of the links to explore the different implementations

## Project Structure

- `src/Controller/`: Contains controllers for each 3D visualization method
- `templates/`: Contains Twig templates for rendering the 3D models
  - `templates/model-viewer/`: Google Model Viewer implementation
  - `templates/tree_js/`: Three.js implementation
  - `templates/babylon_js/`: Babylon.js implementation

## Contributing

1. Fork the repository
2. Create a feature branch: `git checkout -b feature-name`
3. Commit your changes: `git commit -m 'Add some feature'`
4. Push to the branch: `git push origin feature-name`
5. Submit a pull request

## License

This project is licensed under the MIT license - see the composer.json file for details.
