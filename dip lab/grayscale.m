% Read the color image
img = imread('natural.jpg');
% Convert to grayscale
grayImg = rgb2gray(img); 
% Negative transformation 
Negative = imcomplement(img); 
% Display the results 
figure; 
subplot(1,3,1); 
imshow(img); 
title('Original Image'); 
subplot(1,3,2); 
imshow(grayImg); 
title('Grayscale Image'); 
subplot(1,3,3); 
imshow(Negative); 
title('Negative Image'); 