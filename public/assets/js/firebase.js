// Import the functions
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";
import { getStorage, ref, uploadBytes, listAll, getDownloadURL, getMetadata } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-storage.js";

// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyDEYsU5ka9djRZVjRl9xU6laKgCT5pdM8U",
    authDomain: "jujr-6af06.firebaseapp.com",
    projectId: "jujr-6af06",
    storageBucket: "jujr-6af06.firebasestorage.app",
    messagingSenderId: "529522870704",
    appId: "1:529522870704:web:56de781d4764c762116e75",
    measurementId: "G-Z9Y4VQFWTF"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Initialize Firebase Auth
export const auth = getAuth(app)

// Initialize Firebase Storage
export const storage = getStorage(app)