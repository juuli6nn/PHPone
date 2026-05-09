# Requirements Document

## Introduction

This feature redesigns the index.php landing page to have a simpler design while ensuring consistent use of the Inter font throughout all activity pages. The current design has a dark theme with red accents, and while Inter font is linked, it's not actively used in the CSS. The goal is to simplify the visual design and establish consistent typography.

## Glossary

- **Landing_Page**: The index.php file that serves as the main entry point with three activity cards
- **Activity_Pages**: The act1.php, act2.php, and act3.php files containing specific functionality
- **Inter_Font**: The Inter font family from Google Fonts
- **Simplified_Design**: A cleaner, more minimal visual design approach
- **Typography_Consistency**: Uniform font usage across all pages

## Requirements

### Requirement 1: Simplified Landing Page Design

**User Story:** As a user, I want a cleaner, simpler landing page design, so that I can focus on the activity choices without visual clutter.

#### Acceptance Criteria

1. THE Landing_Page SHALL use a simplified color scheme with reduced visual complexity
2. THE Landing_Page SHALL maintain clear visual hierarchy for activity cards
3. THE Landing_Page SHALL provide adequate spacing and breathing room between elements
4. THE Landing_Page SHALL maintain responsive behavior for different screen sizes
5. WHEN a user hovers over an activity card, THE Landing_Page SHALL provide subtle visual feedback

### Requirement 2: Inter Font Consistency

**User Story:** As a developer, I want consistent Inter font usage across all pages, so that the application has uniform typography.

#### Acceptance Criteria

1. THE Landing_Page SHALL use Inter font as the primary font family
2. THE Activity_Pages SHALL use Inter font as the primary font family
3. WHERE font weights are specified, THE System SHALL use appropriate Inter font weights (400 for normal, 500 for medium, 600 for semi-bold, 700 for bold)
4. FOR ALL text elements across all pages, THE System SHALL use Inter font consistently

### Requirement 3: Design Preservation

**User Story:** As a user, I want to preserve essential functionality and readability, so that I can still effectively use all features.

#### Acceptance Criteria

1. WHILE simplifying the design, THE System SHALL preserve all existing functionality
2. THE System SHALL maintain or improve text readability across all pages
3. THE System SHALL maintain clear visual distinction between different activity cards
4. THE System SHALL preserve all navigation links and interactive elements

### Requirement 4: Activity Page Font Updates

**User Story:** As a developer, I want to update activity page styles to use Inter font, so that typography is consistent with the landing page.

#### Acceptance Criteria

1. WHEN an activity page loads, THE Activity_Pages SHALL use Inter font for all text elements
2. THE Activity_Pages SHALL maintain their existing functional styling (colors, layouts, etc.)
3. WHERE font families are specified in activity CSS files, THE System SHALL replace them with Inter font
4. THE System SHALL ensure font rendering is consistent across different browsers

### Requirement 5: Performance Considerations

**User Story:** As a user, I want the redesigned pages to load efficiently, so that I have a smooth browsing experience.

#### Acceptance Criteria

1. THE System SHALL maintain or improve page load performance
2. THE System SHALL use efficient CSS selectors and minimal code
3. THE System SHALL preserve existing Google Fonts loading approach
4. WHERE possible, THE System SHALL optimize font loading for better performance