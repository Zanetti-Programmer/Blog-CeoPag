<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title ?? 'Blog' }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --primary-bg: #121212;
            --card-bg: #1e1e1e;
            --text-primary: #e0e0e0;
            --text-secondary: #a0a0a0;
            --accent: #bb86fc;
            --border-color: #333333;
            --interaction: #03dac6;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }
        
        body {
            background-color: var(--primary-bg);
            color: var(--text-primary);
            font-size: 16px;
            line-height: 1.6;
            padding: 20px;
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }
        
        .container {
            max-width: 800px;
            width: 100%;
        }
        
        .blog-post {
            background-color: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            margin-bottom: 32px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .blog-post:hover {
            transform: translateY(-5px);
        }
        
        .post-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 24px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .post-user {
            display: flex;
            align-items: center;
        }
        
        .user-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            margin-right: 16px;
            position: relative;
            overflow: hidden;
            border: 2px solid var(--accent);
            padding: 3px;
        }
        
        .avatar-image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .user-info {
            display: flex;
            flex-direction: column;
        }
        
        .username {
            font-weight: 700;
            color: var(--text-primary);
            text-decoration: none;
            font-size: 18px;
            margin-bottom: 2px;
        }
        
        .user-title {
            color: var(--text-secondary);
            font-size: 14px;
        }
        
        .more-options {
            cursor: pointer;
            color: var(--text-secondary);
            transition: color 0.2s ease;
        }
        
        .more-options:hover {
            color: var(--text-primary);
        }
        
        .cover-container {
            position: relative;
            width: 100%;
            max-height: 500px;
            overflow: hidden;
        }
        
        .cover-image {
            width: 100%;
            display: block;
            object-fit: cover;
            min-height: 300px;
            max-height: 500px;
            transition: transform 1s ease;
        }
        
        .blog-post:hover .cover-image {
            transform: scale(1.03);
        }
        
        .post-content {
            padding: 24px;
        }
        
        .post-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .post-stats {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .stat-item {
            display: flex;
            align-items: center;
            color: var(--text-secondary);
        }
        
        .stat-item i {
            margin-right: 6px;
        }
        
        .post-date {
            color: var(--text-secondary);
            font-size: 14px;
        }
        
        .post-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 16px;
            color: var(--text-primary);
        }
        
        .post-body {
            font-size: 17px;
            line-height: 1.8;
            color: var(--text-primary);
            margin-bottom: 24px;
            white-space: pre-line;
        }
        
        .post-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 20px;
        }
        
        .tag {
            background-color: rgba(187, 134, 252, 0.1);
            color: var(--accent);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }
        
        .author-section {
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid var(--border-color);
            display: flex;
            align-items: center;
        }
        
        .author-info {
            margin-left: 16px;
        }
        
        .author-name {
            font-weight: 600;
            font-size: 16px;
            color: var(--text-primary);
        }
        
        .author-bio {
            color: var(--text-secondary);
            font-size: 14px;
            margin-top: 4px;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 0 10px;
            }
            
            .post-header {
                padding: 14px 16px;
            }
            
            .post-content {
                padding: 16px;
            }
            
            .post-title {
                font-size: 22px;
            }
            
            .user-avatar {
                width: 40px;
                height: 40px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        });
    </script>
</body>
</html>