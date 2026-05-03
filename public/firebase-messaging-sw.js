// ------------------[Firebase Push Notification]------------------
importScripts(
  "https://www.gstatic.com/firebasejs/10.12.2/firebase-app-compat.js",
);
importScripts(
  "https://www.gstatic.com/firebasejs/10.12.2/firebase-messaging-compat.js",
);

// firebase config details
const firebaseConfig = {
  apiKey: "",
  authDomain: "",
  projectId: "",
  storageBucket: "",
  messagingSenderId: "",
  appId: "",
};

// راه‌اندازی فایربیس و پیام‌رسانی
firebase.initializeApp(firebaseConfig);
const messaging = firebase.messaging();

// هندل نمایش پوش نوتیف در پس‌زمینه
messaging.onBackgroundMessage((payload) => {
  const notificationTitle = payload.notification.title;
  const notificationOptions = {
    body: payload.notification.body,
    icon: "./src/assets/image/logo.png",
    data: payload.data, // برای کلیک و ریدایرکت
  };
  self.registration.showNotification(notificationTitle, notificationOptions);
  console.log("RESULT::::::::::::::::::::::::::::: " + notificationOptions);
});

// کلیک روی نوتیفیکیشن
self.addEventListener("notificationclick", (event) => {
  event.notification.close();
  event.waitUntil(clients.openWindow(event.notification.data.url || "/"));
});
