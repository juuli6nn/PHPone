# Design Document: Index.php Redesign

## Overview

This design document outlines the technical approach for redesigning the index.php landing page and updating all activity pages to use consistent Inter font typography. The goal is to simplify the visual design while preserving all existing functionality and improving typographic consistency across the application.

### Design Goals

1. **Simplified Visual Design**: Reduce visual complexity while maintaining clear hierarchy and usability
2. **Typography Consistency**: Implement Inter font as the primary font family across all pages
3. **Functionality Preservation**: Maintain all existing features and interactive elements
4. **Performance Optimization**: Ensure efficient loading and rendering

### Current State Analysis

The current implementation consists of:
- **index.php**: Landing page with three activity cards using a dark theme (#000000 background) with red accents (#e94560)
- **style.css**: Main stylesheet with dark theme styling, but contains a typo (`san` instead of `sans-serif`)
- **Activity pages**: act1.php, act2.php, act3.php with light backgrounds (#f0f0f0) and Arial font
- **Activity CSS**: Separate stylesheets for each activity with different color schemes

### Key Design Decisions

1. **Simplified Color Palette**: Reduce the number of accent colors while maintaining sufficient contrast
2. **Consistent Typography**: Standardize on Inter font with appropriate weights (400, 500, 600, 700)
3. **Progressive Enhancement**: Maintain backward compatibility while improving visual design
4. **Responsive Foundation**: Build on existing responsive behavior with improvements

## Architecture

### System Components

```
┌─────────────────────────────────────────────────────────────┐
│                    Browser Environment                      │
├─────────────────────────────────────────────────────────────┤
│  ┌─────────────┐  ┌─────────────┐  ┌─────────────┐         │
│  │   index.php │  │   act1.php  │  │   act2.php  │         │
│  │  (Landing)  │  │ (Activity 1)│  │ (Activity 2)│         │
│  └─────────────┘  └─────────────┘  └─────────────┘         │
│         │              │              │                     │
│  ┌──────▼──────┐ ┌────▼──────┐ ┌────▼──────┐              │
│  │  style.css  │ │  act1.css  │ │  act2.css  │             │
│  └─────────────┘ └────────────┘ └────────────┘             │
│         │                                                    │
│  ┌──────▼──────┐                                            │
│  │ Google Fonts│  (Inter font family)                       │
│  └─────────────┘                                            │
└─────────────────────────────────────────────────────────────┘
```

### Design Principles

1. **Simplicity First**: Remove unnecessary visual elements while preserving functionality
2. **Consistency Across Pages**: Uniform typography and design patterns
3. **Accessibility**: Sufficient color contrast and readable font sizes
4. **Performance**: Efficient CSS and font loading

## Components and Interfaces

### Landing Page (index.php)

**Current State**:
- Dark background (#000000)
- Red accent color (#e94560)
- Blue card backgrounds (#16213e, #0f3460)
- Inter font linked but not properly implemented

**Redesigned Components**:

1. **Body Container**
   - Simplified background color (darker shade for reduced eye strain)
   - Consistent padding and centering

2. **Activity Cards**
   - Reduced border complexity
   - Enhanced hover effects with subtle glow
   - Clear visual hierarchy with improved spacing
   - Consistent use of Inter font weights
   - Glow effects using box-shadow and text-shadow on hover

3. **Typography System**
   - Primary font: 'Inter', sans-serif
   - Font weights: 400 (normal), 500 (medium), 600 (semi-bold), 700 (bold)
   - Consistent sizing hierarchy

### Activity Pages (act1.php, act2.php, act3.php)

**Current State**:
- Light backgrounds (#f0f0f0)
- Arial font family
- Different color schemes per activity

**Redesigned Components**:

1. **Font Family Update**
   - Replace `Arial, Helvetica, sans-serif` with `'Inter', sans-serif`
   - Maintain existing color schemes and layouts
   - Update font weights to match Inter font conventions

2. **Consistency Improvements**
   - Standardized font sizing
   - Consistent use of font weights
   - Maintain activity-specific styling

### CSS Architecture

**Current Issues**:
- Typo in style.css: `font-family: 'Inter', san;`
- Inconsistent font usage across pages
- Multiple color schemes without clear hierarchy

**Proposed Structure**:
1. **Base Styles** (style.css)
   - Global resets and box-sizing
   - Inter font implementation
   - Simplified color variables

2. **Component Styles**
   - Card components with consistent patterns
   - Typography scale
   - Interactive states (hover, focus) with glow effects

3. **Activity-Specific Styles**
   - Maintain existing functional styling
   - Update font families only
   - Preserve color schemes and layouts

### Hover Glow Effects Implementation

**Glow Effect Design**:
1. **Card Glow**: Subtle box-shadow glow around the entire card
   ```css
   .card:hover {
       box-shadow: 0 0 15px rgba(233, 69, 96, 0.5);
   }
   ```

2. **Number Glow**: More pronounced text-shadow on card numbers
   ```css
   .card:hover .card-number {
       text-shadow: 0 0 8px rgba(233, 69, 96, 0.8);
       color: #ff6b81; /* Lighter red on hover */
   }
   ```

3. **Title Glow**: Subtle text glow on card titles
   ```css
   .card:hover .card-title {
       text-shadow: 0 0 4px rgba(233, 69, 96, 0.6);
   }
   ```

**Performance Considerations**:
- Use rgba() for transparency to ensure smooth animations
- Limit glow intensity to avoid visual noise
- Test on different devices to ensure smooth rendering
- Consider hardware acceleration for smoother transitions

## Data Models

### Font Configuration Model

```javascript
{
  "fontFamily": "Inter",
  "fallback": "sans-serif",
  "weights": {
    "normal": 400,
    "medium": 500,
    "semi-bold": 600,
    "bold": 700
  },
  "implementation": {
    "cssDeclaration": "font-family: 'Inter', sans-serif;",
    "googleFontsLink": "<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>"
  }
}
```

### Color Palette Model

**Simplified Palette**:
```css
:root {
  /* Primary colors */
  --background-primary: #0a0a0a;  /* Slightly lighter than pure black */
  --background-card: #1a1a1a;      /* Card background */
  --accent-primary: #e94560;       /* Red accent (preserved) */
  --text-primary: #ffffff;          /* Primary text */
  --text-secondary: #aaaaaa;       /* Secondary text */
  
  /* Interactive states */
  --hover-background: #2a2a2a;     /* Card hover */
  --hover-border: #e94560;         /* Hover border accent */
}
```

### Component State Model

**Activity Card States**:
```javascript
{
  "default": {
    "background": "var(--background-card)",
    "border": "1px solid var(--border-color)",
    "transform": "none",
    "boxShadow": "none",
    "textShadow": "none"
  },
  "hover": {
    "background": "var(--hover-background)",
    "border": "1px solid var(--hover-border)",
    "transform": "translateX(4px)",
    "boxShadow": "0 0 15px rgba(233, 69, 96, 0.5)",
    "textShadow": "0 0 8px rgba(233, 69, 96, 0.8) for card-number"
  },
  "focus": {
    "outline": "2px solid var(--accent-primary)",
    "outlineOffset": "2px",
    "boxShadow": "0 0 10px rgba(233, 69, 96, 0.3)"
  }
}
```

## Error Handling

### Font Loading Failures

**Scenario**: Google Fonts (Inter) fails to load
**Handling Strategy**:
1. Use CSS font stack with appropriate fallbacks: `'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif`
2. Implement font-display: swap to ensure text remains visible during font loading
3. Graceful degradation to system fonts if Inter fails to load

**Implementation**:
```css
body {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  font-display: swap;
}
```

### Browser Compatibility

**Scenario**: Older browsers don't support modern CSS features
**Handling Strategy**:
1. Use progressive enhancement approach
2. Provide fallbacks for CSS custom properties (variables)
3. Test across major browsers (Chrome, Firefox, Safari, Edge)

**Implementation**:
```css
/* Fallback for browsers without CSS variable support */
.card {
  background-color: #1a1a1a; /* Fallback value */
  background-color: var(--background-card, #1a1a1a);
}
```

### Responsive Design Breakpoints

**Scenario**: Layout issues on different screen sizes
**Handling Strategy**:
1. Maintain existing responsive behavior
2. Test on mobile, tablet, and desktop viewports
3. Use relative units (rem, em) for typography

### Performance Considerations

**Scenario**: Font loading impacts page performance
**Handling Strategy**:
1. Preserve existing Google Fonts loading approach
2. Consider font subsetting if performance becomes an issue
3. Monitor Core Web Vitals (LCP, FID, CLS)

## Testing Strategy

### Overview

Since this feature involves UI rendering, CSS changes, and font consistency updates, property-based testing is not appropriate. Instead, we'll use a combination of visual regression tests, unit tests for CSS changes, and manual verification.

### Test Categories

#### 1. Visual Regression Testing
**Purpose**: Ensure design changes don't break existing layouts
**Tools**: BackstopJS, Percy, or manual screenshot comparison
**Test Cases**:
- Landing page renders correctly with simplified design
- Activity cards maintain proper spacing and hierarchy
- Hover effects with glow work as expected
- Glow effects are visible but not overpowering
- All activity pages display Inter font correctly
- Responsive behavior across breakpoints

#### 2. CSS Unit Testing
**Purpose**: Verify CSS changes work as expected
**Tools**: Jest with jest-css-modules or similar
**Test Cases**:
- Font family declarations use Inter with proper fallbacks
- Color variables are defined and used correctly
- Media queries function as expected
- Specificity conflicts are avoided

#### 3. Font Consistency Verification
**Purpose**: Ensure Inter font is used consistently
**Tools**: Manual inspection and browser developer tools
**Test Cases**:
- All pages load Inter font from Google Fonts
- Font weights (400, 500, 600, 700) are used appropriately
- Fallback fonts work when Inter fails to load
- Font rendering is consistent across browsers

#### 4. Functionality Preservation Tests
**Purpose**: Verify existing features still work
**Tools**: Manual testing and automated UI tests
**Test Cases**:
- All navigation links work correctly
- Activity cards link to appropriate pages
- Interactive elements (hover states) function
- Form elements in activity pages work as before

#### 5. Performance Testing
**Purpose**: Ensure changes don't degrade performance
**Tools**: Lighthouse, WebPageTest
**Test Cases**:
- Page load time remains within acceptable limits
- Font loading doesn't block rendering
- CSS file size is optimized
- Core Web Vitals are maintained or improved

### Test Implementation Plan

#### Phase 1: Pre-Implementation Tests
1. **Baseline Capture**: Take screenshots of current implementation
2. **CSS Analysis**: Audit current CSS for conflicts
3. **Font Loading Check**: Verify current font loading approach

#### Phase 2: Implementation Tests
1. **Incremental Changes**: Test each CSS change individually
2. **Cross-Browser Testing**: Verify changes work in Chrome, Firefox, Safari, Edge
3. **Responsive Testing**: Test on mobile (320px-768px), tablet (768px-1024px), desktop (1024px+)

#### Phase 3: Post-Implementation Tests
1. **Visual Comparison**: Compare new design with baseline
2. **Functionality Verification**: Test all interactive elements
3. **Performance Measurement**: Run Lighthouse audits
4. **Accessibility Check**: Verify color contrast and readability

### Test Documentation

Each test should document:
- **Test Case**: What is being tested
- **Expected Result**: What should happen
- **Actual Result**: What actually happened
- **Browser/Device**: Testing environment
- **Pass/Fail**: Test outcome

### Why Property-Based Testing Is Not Appropriate

This feature involves:
1. **UI Rendering and Layout**: Visual design changes are best tested with visual regression tests
2. **CSS Configuration**: Font family changes and styling updates
3. **No Algorithmic Logic**: No complex business logic that varies with input
4. **Deterministic Behavior**: CSS either works or doesn't; doesn't benefit from random input generation

**Alternative Approach**: Use example-based unit tests for specific CSS rules and visual regression testing for layout changes.

### Success Criteria

The redesign will be considered successful when:
1. All pages use Inter font consistently
2. Visual design is simplified while maintaining functionality
3. Page performance is maintained or improved
4. No existing features are broken
5. Cross-browser compatibility is preserved