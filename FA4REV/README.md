# Story Website with Include/Require

## 📁 File Structure

```
FA4/
├── header.php          ← Shared header (navigation)
├── footer.php          ← Shared footer
├── index.php           ← Home page (story grid)
├── story1.php          ← Story 1
├── story2.php          ← Story 2
├── story3.php          ← Story 3
├── story4.php          ← Story 4
├── story5.php          ← Story 5
├── style.css           ← Shared styles
└── README.md           ← This file
```

## 🎯 How Include/Require Works Here

### **header.php**
- Contains the opening HTML, navigation menu, and `<main>` tag
- Used by ALL pages with `require 'header.php';`
- Uses `require` because it's essential

### **footer.php**
- Contains the closing `</main>`, footer, and closing HTML tags
- Used by ALL pages with `include 'footer.php';`
- Uses `include` because it's less critical

### **Each Story Page**
```php
<?php
$pageTitle = "Story 1 - The Adventure Begins";
require 'header.php';  // ← Includes header
?>

<!-- Your story content here -->

<?php
include 'footer.php';  // ← Includes footer
?>
```

## 🔄 Benefits of This Approach

1. **DRY (Don't Repeat Yourself)**: Navigation is written once in `header.php`
2. **Easy Updates**: Change navigation in one place, updates everywhere
3. **Consistent Design**: All pages share the same header/footer
4. **Maintainable**: Easy to add new stories

## 📝 To Add a New Story

1. Create `story6.php`
2. Copy the structure from any existing story
3. Change the `$pageTitle` and content
4. Add link to `header.php` navigation
5. Add card to `index.php`

## 🎨 Customization

- **Change colors**: Edit `style.css`
- **Add images**: Place images in FA4 folder, update `src` attributes
- **Modify navigation**: Edit `header.php`
- **Change footer**: Edit `footer.php`

## 🚀 How to View

1. Make sure your web server is running (XAMPP, WAMP, etc.)
2. Navigate to: `http://localhost/FA4/index.php`
3. Click on any story to read it
4. Use navigation to move between stories

## ✅ Assignment Requirements Met

- ✅ 5 different short story webpages
- ✅ Uses `include()` and `require()` to connect pages
- ✅ Integrated with HTML and CSS
- ✅ Images on stories (placeholders provided)
- ✅ Professional navigation system
