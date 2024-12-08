# JagoronKendro-blog

A simple blog written in PHP without any database connection. It uses a straightforward file-based structure to manage content. Articles are stored as individual files in the `/articles` folder, while an `XML` file (`feed.xml`) contains metadata about the posts. The blog dynamically displays content through PHP scripts, ensuring an easy-to-maintain system.



### Folder Structure Overview:


```markdown
/JagoronKendro-blog
  ├── index.php          # Homepage
  ├── article.php        # Individual articles
  ├── feed.xml           # XML file for posts metadata
  ├── .htaccess
  ├── /articles          # Folder containing individual article files
  │   ├── article1.html
  │   ├── article2.html
  │   └── ...
  ├── /css               # Folder for CSS files
  │   └── jkfinal01-styles.css     # Contains your custom styles
  ├── /images            # Optional folder for images
  ├── subscribers.txt
  ├── subscribe.php
```
