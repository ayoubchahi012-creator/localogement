// ajax.js

// Function to create a new logement
function createLogement(data) {
    return fetch('/api/logement', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(response => response.json());
}

// Function to read logements
function readLogements() {
    return fetch('/api/logement').then(response => response.json());
}

// Function to update a logement
function updateLogement(id, data) {
    return fetch(`/api/logement/${id}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(response => response.json());
}

// Function to delete a logement
function deleteLogement(id) {
    return fetch(`/api/logement/${id}`, {
        method: 'DELETE'
    }).then(response => response.json());
}