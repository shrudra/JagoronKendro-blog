![Project Image](images/jk.png)

# JagoronKendro-blog

A simple blog written in PHP without any database connection. It uses a straightforward file-based structure to manage content. Articles are stored as individual files in the `/articles` folder, while an `XML` file (`feed.xml`) contains metadata about the posts. The blog dynamically displays content through PHP scripts, ensuring an easy-to-maintain system.



### Folder Structure Overview:


```markdown
/JagoronKendro-blog
  ├── index.php          # Main homepage of the blog displaying the list of articles.
  ├── article.php        # Template file for dynamically rendering individual articles.
  ├── feed.xml           # XML file providing metadata for blog posts, typically used for RSS or Atom feeds.
  ├── .htaccess          # Apache configuration file for managing URL rewriting, redirects, and access control.
  ├── /articles          # Directory containing individual article files in PHP format.
  │   ├── article1.php   # PHP file for the first article.
  │   ├── article2.php   # PHP file for the second article.
  │   └── ...            # Additional article files in PHP format.
  ├── /css               # Directory for storing CSS files related to the website's styling.
  │   └── jkfinal01-styles.css     # Custom stylesheet containing the design and layout for the blog.
  ├── /images            # Optional directory to store image assets used throughout the blog.
  ├── subscribers.txt    # Text file used to store subscriber information, likely email addresses.
  ├── subscribe.php      # PHP script handling new subscriber registrations or form submissions.

```
