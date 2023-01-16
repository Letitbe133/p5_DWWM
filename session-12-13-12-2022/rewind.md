# Rewind && some New Stuff

![boredpanda.com](https://www.boredpanda.com/blog/wp-content/uploads/2019/08/image-5d5c25b61e2a7__700.jpg)

# Fixed vs. Relative Units in CSS

In CSS, there are two main types of units for specifying lengths: fixed units and relative units.

## Fixed Units

Fixed units are absolute units that are not affected by the user's display settings. They are consistent across all devices and provide a precise measurement of length. Examples of fixed units include:

**px**: pixels

**in**: inches

**cm**: centimeters

**mm**: millimeters

**pt**: points

**pc**: picas

## Relative Units

Relative units are units that are relative to another length value. They are affected by the user's display settings and can change depending on the device or browser. Examples of relative units include:

**em**: the height of the element's font
**rem**: the height of the root element's font
**vh**: 1% of the height of the viewport
**vw**: 1% of the width of the viewport
**%**: percentage of the parent element's size

## When to Use Fixed vs. Relative Units

Fixed units are best used when you want to ensure a precise measurement, such as when creating a grid or setting the size of an image. They are also useful for creating print stylesheets, as the measurements will remain consistent when printed.

Relative units, on the other hand, are useful when you want the size of an element to be relative to something else, such as the font size of the parent element. This can be helpful for creating responsive designs that adjust to the user's device and display settings.

In general, it is best to use a combination of fixed and relative units in your CSS to achieve the desired effect.

Evrything on measures and values [here](https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/Values_and_units)

---

![](https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Fwww.gsb.stanford.edu%2Fsites%2Fdefault%2Ffiles%2Fstyles%2F1630x_variable%2Fpublic%2Fhumor-amifunny-1630_1.jpg%3Fitok%3DUtgOBT-0&sp=1671009285T92421da2ea113bfa93150a95758ada616d180a4b4ba86894307965b10d724a4c)

# Positioning in CSS

In CSS, there are five different position values that can be used to specify the position of an element on a page:

**static**: the default position value. Elements with a static position are not affected by the top, bottom, left, and right properties.

**relative**: elements with a relative position are positioned relative to their default position.

**absolute**: elements with an absolute position are positioned relative to their nearest positioned ancestor (i.e., an ancestor element that is not static). If there is no positioned ancestor, the element is positioned relative to the initial containing block.

**fixed**: elements with a fixed position are positioned relative to the initial containing block, and do not move when the page is scrolled.

**sticky**: elements with a sticky position are positioned based on the user's scroll position. They are initially positioned according to the normal flow of the document, and then switch to a fixed position when the user scrolls to a certain point.

The position property can be used in combination with the top, bottom, left, and right properties to specify the exact position of an element on the page. For example, the following code would position an element with an ID of "my-element" 20 pixels from the top and left of its containing block:

```css
#my-element {
  position: absolute;
  top: 20px;
  left: 20px;
}
```

---

![Flex](https://as1.ftcdn.net/v2/jpg/00/45/37/50/1000_F_45375061_jz0f8ynqDRRpOG3TXEos5Ep1fXssoa0O.jpg)

# Flexbox

Flexbox is a CSS layout mode that makes it easier to create flexible and responsive layout structures. It uses a set of CSS properties that allow elements to be arranged in a flexible manner, allowing them to stretch or shrink to fill available space.

Flexbox works by defining a **flex container** that wraps around the elements that you want to arrange. The container defines the **main axis** along which the elements will be laid out, as well as the direction in which the elements should be laid out.

Inside the container, you can define **flex items** which are the elements that you want to arrange. Each flex item has three main properties that control how it is laid out:

- flex-grow
- flex-shrink
- flex-basis

## flex-grow

The flex-grow property specifies how much the flex item should grow relative to the other flex items in the container. If all flex items have the same flex-grow value, they will all grow at the same rate. If one flex item has a flex-grow value of 2, and the others have a value of 1, the first flex item will grow twice as fast as the others.

## flex-shrink

The flex-shrink property specifies how much the flex item should shrink relative to the other flex items in the container. This property works in a similar way to flex-grow, but it controls the rate at which the flex item shrinks when there isn't enough space in the container.

## flex-basis

The flex-basis property specifies the initial size of the flex item. This value is used as the starting point for the item's size, and it can be adjusted by the flex-grow and flex-shrink properties as needed.

Here is an example of a responsive design using flexbox:

```css
.container {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  justify-content: space-between;
}

.item {
  flex-grow: 1;
  flex-shrink: 1;
  flex-basis: 25%;
}
```

In this example, the container class has the flex-wrap property set to wrap, which means that the child elements will wrap onto multiple lines if there is not enough space to fit them all on one line. The justify-content property is set to space-between, which means that the child elements will be evenly spaced within the container, with the first and last elements aligned with the edges of the container.

The item class has the flex-basis property set to 25%, which means that each child element will occupy 25% of the available space on a line. Since there are 4 items on a large screen, each item will occupy 25% of the container, creating 4 columns of equal width. On a tablet, there will be 2 items per line, so each item will occupy 50% of the container, creating 2 columns. On a mobile phone, there will be only 1 item per line, so each item will occupy 100% of the container, creating 1 column.

This layout will automatically adjust to the size of the screen without the need for media queries. You can further customize the appearance and layout of the elements using additional CSS rules.
